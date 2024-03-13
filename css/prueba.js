function animacion(){
    var div = document.getElementById('miDiv');

    div.style.height = "0px";
    div.style.opacity = "1";
    div.style.transformOrigin = "top";
    div.style.transition = "height 4s linear";
    setTimeout(function() {
        div.style.height = "100%";
        setTimeout(function() {
            div.style.opacity = "0";
            setTimeout(function() {
                div.style.height = "0%";
                div.style.transition = "height .01s linear";
            }, 100);
        }, 5000);
    }, 100);
}

// document.getElementById('miDiv').addEventListener('click', function() {
//     this.style.animation = 'cambioColor 2s forwards'; /* Aplicar la animación */
//     setTimeout(() => {
//       this.style.animation = ''; /* Eliminar la animación después de 2 segundos */
//     }, 2000);
//   });