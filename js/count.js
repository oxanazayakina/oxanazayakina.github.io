const price = document.getElementById("price");
const signleSessionPrice = document.getElementById("single-session-price");
const amountInput = document.getElementById("session-amount"); 
function countValues(){
    var value = amountInput.value;
    if (value >=5){
        signleSessionPrice.textContent = '(2000 руб за сессию)';
        price.textContent = 2000*value+' руб';
        return;
    }
    if (value >= 3 && value < 5) {
        signleSessionPrice.textContent = '(2500 руб за сессию)';
        price.textContent = 2500*value+' руб';
        return
    }
    signleSessionPrice.textContent = '(3000 руб за сессию)';
    price.textContent = 3000*value+' руб';
}