const slidesContainer = document.getElementById("slides-container");
const slide = document.querySelector(".slide");
const prevButton = document.getElementById("slide-arrow-prev");
const nextButton = document.getElementById("slide-arrow-next");
//const statsButton = document.getElementById("stats");
if(slidesContainer && slide && prevButton && nextButton)
{
    const clientWidthScalar = 1.67;

    const slides = document.querySelectorAll(".slide");


    var middle = slide.clientWidth * clientWidthScalar;
    var left = middle - slide.clientWidth;
    var right = middle + slide.clientWidth;

    var pos = [left, middle, right];
    var scrollIndex = 1;

    window.addEventListener('resize', function() {
        middle = slide.clientWidth * clientWidthScalar;
        left = middle - slide.clientWidth;
        right = middle + slide.clientWidth;

        pos = [left, middle, right];
        scroll(scrollIndex)
    }, true);

    function scroll(scrollIndex)
    {
        slidesContainer.scrollTo({
            left: pos[scrollIndex],
            behavior: 'smooth'
        });

        var focusString = ".slide:nth-of-type(" + (scrollIndex+2) + ")";
        var focusElem = document.querySelector(focusString);
        focusElem.classList.remove("unfocused");

        var unfocusString = ".slide:not(:nth-of-type(" + (scrollIndex+2) + "))";
        var unfocusedElems = document.querySelectorAll(unfocusString);

        unfocusedElems.forEach( e => {
            e.classList.add("unfocused")
        })
    }

    nextButton.addEventListener("click", () => {
        scrollIndex += 1;
        if(scrollIndex >= pos.length)
            scrollIndex = 0;
        
        scroll(scrollIndex);
    });  

    prevButton.addEventListener("click", () => {
        scrollIndex -= 1;
        if(scrollIndex <= -1)
            scrollIndex = pos.length-1;

        scroll(scrollIndex);
    });

    //statsButton.addEventListener("click", () => {});

    scroll(scrollIndex);
}