let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    let btn_see_all = document.getElementById('btn-see-all');
    btn_see_all.classList.remove("fade");
    btn_see_all.classList.add("fade")
    let btn_see = setTimeout(() => {
        btn_see_all.classList.remove("fade");
    }, 2000);
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

// screen 2
function setActive(index) {
    // Remove active class from all buttons
    const buttons = document.querySelectorAll('.button-group-category button');
    buttons.forEach(button => button.classList.remove('active'));

    // Add active class to the clicked button
    buttons[index - 1].classList.add('active');
  }
