let selectTechnics = document.querySelector(".landing__technics-select")

selectTechnics.addEventListener('change', selectTechnicsHandler)

function selectTechnicsHandler() {
    document.querySelectorAll('.landing__technics-tabs .nav-item a')[this.options.selectedIndex].click()

}
