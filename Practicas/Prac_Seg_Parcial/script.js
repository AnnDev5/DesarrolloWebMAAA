function pregunta1(){
    mensaje.innerHTML = `Turno X`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "tresenraya.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}
function pregunta2(){
    mensaje.innerHTML = `Pregunta 2`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "tabla.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}
var turno = 'X';
function marcarCasilla(numero) {
    var casilla = document.getElementsByClassName('casilla')[numero];
    if (casilla.innerHTML === '') {
        casilla.innerHTML = turno;
        cambiarTurno();
    }
}
function cambiarTurno() {
    turno = turno === 'X' ? 'O' : 'X';//operador ternario
    document.getElementById('mensaje').innerHTML = 'Turno ' + turno;
}