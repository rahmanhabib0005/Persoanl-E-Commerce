// Special Countdown
let dayItem = document.querySelector('#days');
let hoursItem = document.querySelector('#hours');
let minItem = document.querySelector('#min');
let secItem = document.querySelector('#sec');

let Countdown = () => {
    let futureDate = new Date("01 July 2023");
    let currentDate = new Date();
    let myDate = futureDate - currentDate;

    let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
    let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;
    let min = Math.floor(myDate / 1000 / 60) % 60;
    let sec = Math.floor(myDate / 1000) % 60;

    dayItem.innerHTML = days;
    hoursItem.innerHTML = hours;
    minItem.innerHTML = min;
    secItem.innerHTML = sec;
}

Countdown()

setInterval(Countdown, 1000)
// Scroll Back To Top
function scrollTopBack(){
    let scrollTopButton = document.querySelector("#scrollup");
    window.onscroll = function () {
        var scroll = document.documentElement.scrollTop;
        if(scroll >= 250){
            scrollTopButton.classList.add('scrollActive');
        }else{
            scrollTopButton.classList.remove('scrollActive');
        }
    }
}
scrollTopBack();
// Nav Hide
let navBar = document.querySelectorAll('.nav-link');
let navCollaps = document.querySelector('.navbar-collapse.collapse');
navBar.forEach(function(a){
    a.addEventListener("click", function(){
        navCollaps.classList.remove('show');
    })
})

