let preorderBtnArr = document.querySelectorAll('.js-preorder-btn')

preorderBtnArr.forEach(function(element){
    element.addEventListener('click', formPreorder)
})

function formPreorder() {
    let productTitle = this.getAttribute('data-preorder-title')
    document.querySelector('.js-preorder-title').textContent = productTitle
}
