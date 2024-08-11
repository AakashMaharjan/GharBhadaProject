const next = document.querySelector(".next");
const prev = document.querySelector(".prev");
const Slides = document.querySelectorAll(".slide");
const Sliders = document.querySelectorAll(".slider");

let counter = 0;

next.addEventListener("click", function () {
    counter++;
    slide();
});

prev.addEventListener("click", function () {
    counter--;
    slide();
});

function slide() {
    let slidesToShow = 1; // Default for small screens
    let slideWidth = Slides[0].offsetWidth;

    if (window.matchMedia("(max-width: 1025px)").matches) {
        slidesToShow = 5; // Show 2 slides on medium screens
    }
    if (window.matchMedia("(min-width: 1100px)").matches) {
        slidesToShow = 5; // Show 5 slides on large screens
    }

    let totalSlides = Slides.length;
    let maxCounter = totalSlides - slidesToShow;

    if (counter > maxCounter) {
        counter = 0;
    }
    if (counter < 0) {
        counter = maxCounter;
    }

    Sliders.forEach(function (slider) {
        let slideContainerWidth = slider.offsetWidth;
        slideWidth = slideContainerWidth / slidesToShow; // Calculate correct slide width
        slider.style.transform = `translateX(-${counter * slideWidth-7}px)`;
    });
}

window.addEventListener("resize", slide); // Adjust slide on window resize
