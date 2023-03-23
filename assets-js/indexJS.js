const toggleButton = document.querySelector('.newsFlash');
const overlay = document.querySelector('.overlay');


$(document).ready(function (){
  $('.newsFlash').click(function(){
    $('.newsFlash').element.classList.add("active")
  })
})