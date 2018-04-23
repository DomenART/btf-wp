let cartBtn = document.querySelector('.cart')
let purchasePopup = document.querySelector('.purchase-popup')

$('#purchaseModal').on('show.bs.modal', function () {
    cartBtn.classList.add('hidden')
})

$('#purchaseModal').on('hide.bs.modal', function () {
    cartBtn.classList.remove('hidden')
})
