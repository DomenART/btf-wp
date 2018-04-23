import Inputmask from "inputmask"

var selector = document.getElementById("maskTel")

var im = new Inputmask("+9 (999) 999-9999")
im.mask(selector)
