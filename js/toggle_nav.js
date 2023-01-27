var isToggled = false;
var body = document.querySelector("body.home.blog");
var sidebar = document.querySelector(".menu-header-container");
var toggleBtn = document.querySelector("button.togglebtn");
var shortLogo = document.querySelector("div.short-logo");
var nav = document.querySelector("nav#site-navigation.main-navigation");
var replacementHeader = document.querySelector("div#replacement-header");

function toggleNav() 
{
    if(isToggled)
    {
        sidebar.style.width = "0";
        body.style.height = "auto";
        body.style.overflow = "visible";
        toggleBtn.classList.remove("active");
        shortLogo.classList.remove("active");
        isToggled = false;
    }else
    {
        sidebar.style.width = "100%";
        let he = sidebar.offsetHeight + "px";
        body.style.height = he;
        body.style.overflow = "hidden";
        toggleBtn.classList.add("active");
        shortLogo.classList.add("active");
        isToggled = true;
    }
}

window.addEventListener('scroll', () => 
{
    let setinTresh = window.innerHeight * .25;
    var opacity = 1;
    if(window.scrollY > setinTresh)
    {
        let fadeoutThresh = 400;
        opacity = 1 - (window.scrollY - setinTresh) / fadeoutThresh;
    }
    if(opacity <= 1 || opacity >= 0)
        nav.style.opacity = opacity;

    if(opacity <= .2)
    {
        if(!replacementHeader.classList.contains("show"))
            replacementHeader.classList.add("show");
    }else
    {
        if(replacementHeader.classList.contains("show"))
            replacementHeader.classList.remove("show");
    }
})