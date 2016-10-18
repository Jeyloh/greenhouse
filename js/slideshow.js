<<<<<<< HEAD:js/slideshow.js
/*
var slideshowContainer = document.getElementById("slideshow");

$(document).ready(function() {
    var image = $("<img>");
    var div = $("<div>")
    image.load(function() {
      div.css({
        "width": this.width,
        "height": this.height,
        "background-image": "url(" + this.src + ")"
      });
      $("#container").append(div);
    });
	image.attr("src", "test0.png");
});*/

var slideIndex = 0;
showSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1;} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Changes every 5 seconds
}

/* Non automatic slides:

var slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
=======
/*
var slideshowContainer = document.getElementById("slideshow");

$(document).ready(function() {
    var image = $("<img>");
    var div = $("<div>")
    image.load(function() {
      div.css({
        "width": this.width,
        "height": this.height,
        "background-image": "url(" + this.src + ")"
      });
      $("#container").append(div);
    });
	image.attr("src", "test0.png");
});*/

var slideIndex = 0;
showSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1;} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Changes every 5 seconds
}

/* Non automatic slides:

var slideIndex = 1;
showSlides(slideIndex);

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
>>>>>>> 29d3e6d8a0af7aeb9b961fe4630b4d0ded318381:slideshow.js
*/