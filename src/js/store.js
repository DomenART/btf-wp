let purchaseBtnArr = document.querySelectorAll('.purchase-button')
let cart = {}

purchaseBtnArr.forEach(function(element) {
    element.addEventListener('click', getProductData)
})

window.addEventListener('load', loadCart())

function getProductData(){
    let productId = this.getAttribute('data-product-id')
    let productTitle = this.getAttribute('data-product-title')
    let productPrice = this.getAttribute('data-product-price')
    formCart(productId,productTitle,productPrice)
    console.clear()
    setCookie()
    // console.log(cart)
}

function formCart(id,title,price){
    if (cart[id]) {
        cart[id].count++
    } else {
        cart[id] = {title: title, price: price, count: 1}
    }
}

function setCookie(){
    document.cookie = "cartStorage=" + JSON.stringify(cart);
}

function loadCart(){
    let cartStorage = getCookie('cartStorage');
    if (cartStorage) {
        cart = JSON.parse(cartStorage);
        console.log(cart)
    }
 }

 function getCookie(name) {
   var matches = document.cookie.match(new RegExp(
     "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
   ));
   return matches ? decodeURIComponent(matches[1]) : undefined;
 }
