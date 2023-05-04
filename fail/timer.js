setTimeout(setNum,1000,'2');
setTimeout(setNum,2000,'1');
setTimeout(setNum,3000,'0');
function setNum(num) {
document.getElementById("timer").textContent = num;
}