var isToggled = false;
//var body = document.querySelector("body.home.blog");
var body = document.querySelector("body");
var sidebar = document.querySelector(".menu-header-container");
var toggleBtn = document.querySelector("button.togglebtn");
var shortLogo = document.querySelector("div.short-logo");
var nav = document.querySelector("nav#site-navigation.main-navigation");
var replacementHeader = document.querySelector("div#replacement-header");

var smallDisplayDesiredWidth = "0";

function toggleNav() 
{
    if(isToggled)
    {
        smallDisplayDesiredWidth = "0";
        body.style.height = "auto";
        body.style.overflowY = "visible";
        toggleBtn.classList.remove("active");
        shortLogo.classList.remove("active");
        isToggled = false;
    }else
    {
        smallDisplayDesiredWidth = "100%";
        let he = sidebar.offsetHeight + "px";
        body.style.height = he;
        body.style.overflowY = "hidden";
        toggleBtn.classList.add("active");
        shortLogo.classList.add("active");
        isToggled = true;
    }

    sidebar.style.width = smallDisplayDesiredWidth;
}

window.addEventListener('scroll', () => 
{
    let setinTresh = window.innerHeight * .25;
    var opacity = 1;
    if(window.scrollY > setinTresh)
    {
        let fadeoutThresh = 100;
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

window.addEventListener('resize', function() {
    if(this.window.innerWidth >= 600)
    {
        sidebar.style.width = "100%";
        body.style.height = "auto";
        body.style.overflowY = "visible";
    }else{
        sidebar.style.width = smallDisplayDesiredWidth;
    }
}, true);
