$(document).ready(function(){
    tamano()
    $(window).resize(tamano)
})

function tamano(){
    var largo = document.documentElement.clientHeight
    console.log(largo)
    largo = largo-75-189;
    $(".contenedor").css("min-height", largo)
}
