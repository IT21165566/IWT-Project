const buttons = document.querySelectorAll("[data-c-btn]")

buttons.forEach(button => {
    button.addEventListener('click' , () => {
        const offset = button.dataset.carouselButton === 'next' ? 1 : -1
        const slides = button
        .closest("[data-carousel")
        .querySelector("[data-slides]")

        const activeSlide = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(activeSlide) + offset
        if(newIndex < 0) newIndex = slides.children.length - 1 
        if(newIndex >= slides.children.length) newIndex = 0
        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active
    }) 
})


function first(){
  document.getElementById('banner_image').src = "../images/W1.jpg";
}
function second(){
  document.getElementById('banner_image').src = "../images/W2.jpg";
}
function third(){
  document.getElementById('banner_image').src = "../images/W3.jpg";
}
function fourth(){
  document.getElementById('banner_image').src = "../images/W7.jpg";
}
function fifth(){
  document.getElementById('banner_image').src = "../images/W5.jpg";
}
function sixth(){
  document.getElementById('banner_image').src = "../images/W9.jpg";
}

setInterval(first, 4800);
setInterval(second, 3000);
setInterval(third, 12000);
setInterval(fourth, 13000);
setInterval(fifth, 12000);
setInterval(sixth,16000);

