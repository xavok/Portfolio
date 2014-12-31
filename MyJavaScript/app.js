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
	
	

$("#timeBtn").click(function()
{
	toggle_time('time');
	document.getElementById('time').innerHTML = Date();
});
}

$(document).ready(main);
// this function changes html text to other text
function zoroInfo() {
                document.getElementById('zoro').innerHTML = "<h1>Zoro</h1><br />He was the first member to join the Straw Hat Pirates, and, to date, is considered the largest threat and most dangerous member in the crew after Luffy. His fame as a master swordsman and his great strength, along with the actions of his captain, sometimes led others to believe he was the true captain of the crew earlier on. He is one of the top three fighters in the crew alongside Luffy and Sanji, and his dream is to become the greatest swordsman in the world. Zoro was regarded as one of 'The Eleven Supernovas', the eleven rookie pirates with bounties over 100,000,000 to have reached the Red Line before the two year time skip, with a current bounty of 120,000,000.";
            }
function luffyInfo() {
    document.getElementById('luffy').innerHTML = "<h1>Luffy</h1><br /> also known as 'Straw Hat', is a pirate and the main protagonist of the anime and manga, One Piece. He is the son of the Revolutionary Army's commander, Monkey D. Dragon, the grandson of the famed Marine, Monkey D. Garp, the foster son of a mountain bandit, Curly Dadan, and the adopted brother of the late 'Fire Fist' Portgas D. Ace and the revolutionary Sabo. His lifelong dream is to become the Pirate King by finding the legendary treasure left behind by the previous Pirate King, Gol D. Roger. He believes that being Pirate King means having the most freedom in the world. He has eaten the Gomu Gomu no Mi. As the founder and captain of the Straw Hat Pirates, he is the first member of the crew, as well as one of its top three fighters.";
}
function sanjiInfo() {
    document.getElementById('sanji').innerHTML = "<h1>Sanji</h1><br />Sanji is a pirate and the cook of the Straw Hat Pirates, and the former sous chef of Baratie. He is officially the fifth member of the crew and the fourth to join, doing so at the end of the Baratie Arc. Since he was born in North Blue, he is the first Straw Hat not to originate from East Blue. He is one of the Monster Trio in the crew alongside Luffy and Zoro. His dream is to find the rumored All Blue, which is where East Blue, West Blue, North Blue, and South Blue meet along with their wildlife, a chef's paradise. He has a bounty of Beli77,000,000."
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
			
// Function to toogle time button
function toggle_time(id) {
    var time = document.getElementById(id);
    if (time.style.display == 'block' || time.style.display == '') {
        time.style.display = 'none';
    }
    else 
    {
        time.style.display = 'block';
    }
}