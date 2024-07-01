const countButtons = document.querySelectorAll("button").length;
let products = [];
for (let i = 0; i < countButtons; i++) {
    document.querySelectorAll("button")[i].addEventListener("click", showValue);
}
//
function showValue() {
    products.push(this.value);
    console.log(products);
    document.getElementById("badge").setAttribute("value", products.length);
}
