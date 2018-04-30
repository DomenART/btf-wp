let purchaseModal = document.querySelector('#purchaseModal')
let purchaseBtnArr = document.querySelectorAll('.js-purchase-btn')
let cartBtn = document.querySelector('.cart')
let cartPool = document.querySelector('.purchase-popup__product-pool')
let cart = {}

window.addEventListener('load', function() {
    loadCart()
    if (Object.keys(cart).length > 0) {
        cartBtn.classList.remove('hidden')
    }
    sumTotalCart()
    sumCountCart()
})

$('#purchaseModal').on('show.bs.modal', function() {
    cartBtn.classList.add('hidden')
})

$('#purchaseModal').on('hide.bs.modal', function() {
    if (Object.keys(cart).length > 0) {
    cartBtn.classList.remove('hidden')
    }
})

purchaseBtnArr.forEach(function(element) {
    element.addEventListener('click', getProductData)
})

purchaseBtnArr.forEach(function(element) {
    element.addEventListener('click', fillCart)
})

purchaseBtnArr.forEach(function(element) {
    element.addEventListener('click', fillCart)
})

cartBtn.addEventListener('click', fillCart)

$('#purchaseModal').on('hide.bs.modal', function() {
    setCookie()
    clearCart()
})

function getProductData() {
    let productId = this.getAttribute('data-product-id')
    let productTitle = this.getAttribute('data-product-title')
    let productPrice = this.getAttribute('data-product-price')
    formCart(productId,productTitle,productPrice)
    setCookie()
}

function formCart(id,title,price) {
    if (cart[id]) {
        cart[id].count++
        cart[id].totalprice = cart[id].price * cart[id].count
    } else {
        cart[id] = {
            title: title,
            price: +price,
            totalprice: +price,
            count: 1
        }
    }
}

function setCookie() {
    document.cookie = "cartStorage=" + JSON.stringify(cart);
}

function loadCart() {
    let cartStorage = getCookie('cartStorage');
    if (cartStorage) {
        cart = JSON.parse(cartStorage);
    }
}

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function clearCart() {
    while (cartPool.firstChild) {
        cartPool.removeChild(cartPool.firstChild);
    }
}

function fillCart() {
    for (let key in cart) {
        cartPool.insertAdjacentHTML('afterbegin', '<div class="purchase-popup__product" data-product-id="' + key + '"><div class="purchase-popup__product-leftside"><div class="purchase-popup__product-title">' +  cart[key].title + '</div></div><div class="purchase-popup__product-rightside"><div class="purchase-popup__counter"><button class="purchase-popup__counter-decrease"></button><div class="purchase-popup__counter-number">' + cart[key].count + '</div><button class="purchase-popup__counter-increase"></button></div><div class="purchase-popup__sum">' + cart[key].totalprice + ' р.</div></div><button class="purchase-popup__remove"></button></div>')
    }
    let productDecreaseCountBtnArr =  document.querySelectorAll('.purchase-popup__counter-decrease')
    let productIncreaseCountBtnArr =  document.querySelectorAll('.purchase-popup__counter-increase')
    let productRemoveBtnArr =  document.querySelectorAll('.purchase-popup__remove')
    productDecreaseCountBtnArr.forEach(function(element) {
        element.addEventListener('click', decreaseProductCount)
    })
    productIncreaseCountBtnArr.forEach(function(element) {
        element.addEventListener('click', increaseProductCount)
    })
    productRemoveBtnArr.forEach(function(element) {
        element.addEventListener('click', removeProduct)
    })
    sumCountCart()
    sumTotalCart()
}

function decreaseProductCount(event) {
    let productParent = event.currentTarget.parentNode
    while (!productParent.classList.contains('purchase-popup__product')) {
        productParent = productParent.parentNode
    }
    let key = productParent.getAttribute('data-product-id')
    cart[key].count -= 1
    cart[key].totalprice -= cart[key].price
    if (cart[key].count > 0) {
        productParent.querySelector('.purchase-popup__counter-number').innerHTML = cart[key].count
        productParent.querySelector('.purchase-popup__sum').innerHTML = cart[key].totalprice + ' р.'
    } else {
        productParent.parentNode.removeChild(productParent)
        delete cart[key]
    }
    if (Object.keys(cart).length == 0) {
        $('#purchaseModal').modal('hide')
    }
    sumCountCart()
    sumTotalCart()
}

function increaseProductCount(event) {
    let productParent = event.currentTarget.parentNode
    while (!productParent.classList.contains('purchase-popup__product')) {
        productParent = productParent.parentNode
    }
    let key = productParent.getAttribute('data-product-id')
    cart[key].count += 1
    cart[key].totalprice += cart[key].price
    productParent.querySelector('.purchase-popup__counter-number').innerHTML = cart[key].count
    productParent.querySelector('.purchase-popup__sum').innerHTML = cart[key].totalprice + ' р.'
    sumCountCart()
    sumTotalCart()
}

function removeProduct(event) {
    let productParent = event.currentTarget.parentNode
    while (!productParent.classList.contains('purchase-popup__product')) {
        productParent = productParent.parentNode
    }
    let key = productParent.getAttribute('data-product-id')
    productParent.parentNode.removeChild(productParent)
    delete cart[key]
    if (Object.keys(cart).length == 0) {
        $('#purchaseModal').modal('hide')
    }
    sumCountCart()
    sumTotalCart()
}

function sumTotalCart() {
    let totalCart = 0
    for (let key in cart) {
        totalCart += cart[key].totalprice
    }
    document.querySelector('.js-total-cart').innerHTML = totalCart
    document.querySelector('.cart__total').innerHTML = '= ' + totalCart + ' р.'
}

function sumCountCart() {
    let countCart = 0
    for (let key in cart) {
        countCart += cart[key].count
    }
    document.querySelector('.cart__count').innerHTML = countCart
}
