let menuBtn = document.querySelector('.menu-button')

menuBtn.addEventListener('click', menuBtnHandler)

function menuBtnHandler() {
    let header = document.querySelector('.main-header')
    header.classList.toggle('main-header_opened')
}
