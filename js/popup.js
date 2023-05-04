function init () {
let popup = document.querySelectorAll(".popup");// popup
let register_btn = document.querySelectorAll(".register-button")[0];
}
const date_popup = document.getElementById("date-popup");
function closeDatePopup() {
    date_popup.classList.toggle("hidden");
}
const popup1 = document.querySelectorAll(".image-popup1")[0];

const popup2 = document.querySelectorAll(".image-popup2")[0];
document.querySelectorAll('.popup-filler')[0].addEventListener('click', function (){
closePopup();
});
document.querySelectorAll('.popup-filler')[1].addEventListener('click', function (){
    closePopup();
    });
function closePopup () {
    document.body.overflow = "visible";
    popup1.classList.remove("opened");
    popup2.classList.remove("opened");
}
function openPopup (num) {
    closePopup();
    document.body.overflow = "hidden";
    if (num == 1) {
        popup1.classList.add("opened");
    }else {
        popup2.classList.add("opened");
    }
}
function openTimePopup(){
    
}
function openLeftPopup () {
    document.querySelectorAll(".left-popup")[0].classList.add("opened");
    document.body.style.overflowY = "hidden";
}
function closeLeftPopup () {
    document.querySelectorAll(".left-popup")[0].classList.remove("opened");
    document.body.style.overflowY = "scroll";
}

init();