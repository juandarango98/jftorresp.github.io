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
let count = 1;

/**
Function that counts the number of times the like button is clicked, is a likes counter.
Print the number of likes on the console and change the value to the p element with the id count.
*/
function countLikes(){
  document.getElementById("count").innerHTML = count ++;
  localStorage.setItem("countlikes", count);
  console.log(count);
}

/**
Function that generates a Random Heaxa Color.
*/
function generateRandomColor(){
  let hexa = '0123456789ABCDEF';
  let color = '#';
  for(let i = 0; i < 6; i++){
    //We get an index from the string hexa by selecting a random position from 0 to 15 and use the floor function in order to get an integer.
    // Than index is then added to the # six time as the for does that.
    color += hexa[Math.floor(Math.random() * 16)];
  }
  return color;
}

/**
Function that call updates the number of likes and checks if the variable count exists in the local BD.
*/
window.onload=function()
{
    if(localStorage.getItem("countlikes")!=null)
    {
        count = localStorage.getItem("countlikes");

        document.getElementById("count").value = count;
    }
    else{
      count = 0;
    }
}

/**
Function that changes the background color of the section likes, only when the count of likes is a multiple of 10
Also displays an alert showing the number of like.
*/
document.getElementById('likes').onclick = function() {
        let countI = parseInt(count,  10);
        if(countI % 10 == 0){
        alert("Wow you are the like #" + count + "!");
        document.getElementById("likes").style.backgroundColor = generateRandomColor();
    }
}

/**
Function that clears the local BD when the element p in the footer is clicked.
*/
document.getElementById('name').onclick = function() {
    localStorage.clear();
}


