import Inputmask from "inputmask"

var selector = document.getElementsByClassName("js-mask")

var im = new Inputmask("+9 (999) 999-9999")
im.mask(selector)
