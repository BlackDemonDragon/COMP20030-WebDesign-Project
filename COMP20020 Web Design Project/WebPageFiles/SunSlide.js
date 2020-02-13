/*Javascript for SunSlideShow*/

/*Declare indexSunSlides variable*/
var indexSunSlides = 1;

/*Calls showSlides so that the 1st slide is visible*/
showSlides(indexSunSlides);

/* Next and previous  slide function */
function ChangeSlides(n) {

  /*Will increase or decrease indexSunSlides by 1 and then call showSlides*/
  showSlides(indexSunSlides += n);
}

/*slideDots function*/
function currentSlideDot(n) {

  /*Sets indexSunSlides to the value of the dot that was passed in*/
  showSlides(indexSunSlides = n);
}

/*Function that changes which slides are displayed*/
function showSlides(n) {
  /*variables*/
  var i;

  /*Sets up variables for all the slides and all the dots*/
  var slides = document.getElementsByClassName("SunSlide");
  var dots = document.getElementsByClassName("dotSlide");

  /*If n > the total number of slide set indexSunSlides to 1*/
  if (n > slides.length) {
    indexSunSlides = 1;
  }

  /*If n < 1 set indexSunSlides to end to the slides*/
  if (n < 1) {
    indexSunSlides = slides.length;
  }

  /*For loop to run through the slide and set their display to none*/
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  /*For loop to run through the dots and remove active from there classes*/
  for (i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  /*Sets the selected slide to be displayed and sets the coorosponding dot to active*/
  slides[indexSunSlides-1].style.display = "block";
  dots[indexSunSlides - 1].classList.add("active");

}
