require('./bootstrap');
import 'bootstrap';

var $ = require('jquery');

window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$(document).ready(function() {
  
  $('#white_blue h3').click(function() {
    // $(this).next('p').fadeToggle('hide show', 'linear');
    $(this).next('p').slideToggle();
  }); 

}); 