//js function for dropdown menu. Everytime you click menu toggle
var main = function() {
  $('.dropdown-toggle').click(function() {
    $('.dropdown-menu').toggle();
  });

// Js code for arrow click next, it changes slide and dot after each click to next one.
  $('.arrow-next').click(function() {
    var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next();

    var currentDot = $('.active-dot');
    var nextDot = currentDot.next();
// if slides ended go back to first slide and first dot
    if(nextSlide.length === 0) {
      nextSlide = $('.slide').first();
      nextDot = $('.dot').first();
    }
   // makes previous slide fadeOut and next slide fadeIn 
    currentSlide.fadeOut(600).removeClass('active-slide');
    nextSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    nextDot.addClass('active-dot');
  });

// js function that shows previous slide after click on arrow
  $('.arrow-prev').click(function() {
    var currentSlide = $('.active-slide');
    var prevSlide = currentSlide.prev();

    var currentDot = $('.active-dot');
    var prevDot = currentDot.prev();
// if on first slide and press previous arrow go to the first slide code.
    if(prevSlide.length === 0) {
      prevSlide = $('.slide').last();
      prevDot = $('.dot').last();
    }
    // makes slide fadeOut and previous slide fadeIn 
    currentSlide.fadeOut(600).removeClass('active-slide');
    prevSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    prevDot.addClass('active-dot');
  });

}

$(document).ready(main);
// this function changes html text to other text
function hhh() {
                document.getElementById('h2').innerHTML = "HAHAAHAH";
            }
function newFunction() {
    document.getElementById('demo').innerHTML = "CHAAAAANGED";
}
function h4New() {
    document.getElementById('change').innerHTML = "CHANGESSSSSSS";
}

// This function changes images after you click on it
            function changeImage() {
                var luffy = document.getElementById('onePiece');
                if (luffy.src.match("onePiece1")) {
                    luffy.src = "onePiece2.jpg";
                } else if(luffy.src.match("onePiece2")) {
                    luffy.src = "onePiece3.jpg";
                } else if (luffy.src.match("onePiece3")) {
                    luffy.src = "onePiece4.jpg";
                } else {
                    luffy.src = "onePiece1.jpg";
                }
            }
// This function let user input their name and then prints out a paragraph.
            function nameNew    () {
                var x, text;

                // Get the value of input field with id="numb"
                x = document.getElementById("name").value;

                // If x is Not a Number or less than one or greater than 10
                if (x >= 0 || x < 0 ) {
                    text = "Input not valid";
                } else {
                    text = "Hello " + x + ". Welcome to my site!";
                }
                document.getElementById("hello").innerHTML = text;
            }
// this function allow users to multiply, add, subtract and divide numbers they want.
            function doingMath() {
                var x = document.getElementById("number1").value;
                var y = document.getElementById("number2").value;
                var z = document.getElementById("number3").value;
                var a = (x + y) + z;
                var b = x * y * z;
                var c = x / y / z;
                var d = x - y - z;
                document.getElementById("math").innerHTML = a;
                document.getElementById("math1").innerHTML = b;
                document.getElementById("math2").innerHTML = c;
                document.getElementById("math3").innerHTML = d;

            }