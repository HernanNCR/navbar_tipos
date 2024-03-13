// esta funcion cambia las caracteristicas de el div con id miDiv
// el primer settime sirve para que asi se la transicion del height a 100%
// el segundo y tercero sirve para cambiar las caracteristicas
// esta funcion es como una barra de carga de arriba hacia abajo, el div tenia caracteristicas como widht, height, traslate scalex(-1) top position
function animacion(){
    var div = document.getElementById("miDiv");

    console.log("miDiv"+id);

    div.style.background = "red";

    div.style.height = "0px";
    div.style.opacity = "1";
    div.style.transformOrigin = "top";
    div.style.transition = "height 2s linear";
    setTimeout(function() {
        div.style.height = "100%";
        setTimeout(function() {
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.height = "0%";
                div.style.transition = "height .01s linear";
            }, 100);
        }, 3500);
    }, 100);
}

// cambia el background del div con el mismo id que esta entrando y el settima lo devuelve a su color
function animacionDIV(id){
    var div = document.getElementById("div"+id);

    console.log("div"+id);

    div.style.background = "blue";
    setTimeout(function() {
        div.style.background = "red";
    }, 2000);
}