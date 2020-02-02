'use strict';

/** This code form lines 5 to 20 was taken from the W3Schools page **/

// Call the function that adds the sticky class to the navbar
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 

/** Credits: https://www.w3schools.com/howto/howto_js_navbar_sticky.asp **/

/** My own code **/


// document.getElementById("like-btn").addEventListener("click", countLikes());

// Variable with the count of likes
var count = 0;

/**
Function that counts the number of times the like button is clicked, is a likes counter.
Print the number of likes on the console and change the value to the p element with the id count.
*/
function countLikes(){
  document.getElementById("count").innerHTML = count += 1;
  console.log(count);
}


