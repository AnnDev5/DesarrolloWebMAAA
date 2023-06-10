function pregunta1() {
  mensaje.innerHTML = `Turno X`;
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "tresenraya.html");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200)
      contenido.innerHTML = ajax.responseText;
  };
  ajax.send();
}
function pregunta2() {
  mensaje.innerHTML = `Pregunta 2`;
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "tabla.html");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200)
      contenido.innerHTML = ajax.responseText;
  };
  ajax.send();
}
function calcular() {
  var numinicio = parseInt(document.getElementById("numinicio").value);
  var operacion = obtenerValor();
  var numfinal = parseInt(document.getElementById("numfinal").value);
  let resultado = 0;
  let html = `<table>`;
  for (i = 0; i < numfinal; i++) {
    html += `<tr>
    <td class="celda">${i + 1} </td>`;
    switch (operacion) {
      case "suma":
        html += `<td class="celda">+</td>`;
        resultado = suma(i + 1, numinicio);
        break;
      case "resta":
        html += `<td class="celda">-</td>`;
        resultado = resta(i + 1, numinicio);
        break;
      case "multiplicacion":
        html += `<td class="celda">*</td>`;
        resultado = multiplicacion(i + 1, numinicio);
        break;
      case "division":
        html += `<td class="celda">/</td>`;
        resultado = division(i + 1, numinicio);
        break;
      default:
    }

    html += `<td class="celda">${numinicio}</td>
    <td class="celda">=</td>
    <td class="celda">${resultado}</td>
    </tr>`;
  }
  html += `</table>`;
  contenido.innerHTML = html;
}
var turno = "X";
function marcarCasilla(numero) {
  var casilla = document.getElementsByClassName("casilla")[numero];
  if (casilla.innerHTML === "") {
    casilla.innerHTML = turno;
    cambiarTurno();
  }
}
function cambiarTurno() {
  turno = turno === "X" ? "O" : "X"; //operador ternario
  document.getElementById("mensaje").innerHTML = "Turno " + turno;
}
function obtenerValor() {
  var radios = document.getElementsByName("operacion");
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      var valorSeleccionado = radios[i].value;
      return valorSeleccionado;
    }
  }
}
function suma(a, b) {
  return a + b;
}
function resta(a, b) {
  return a - b;
}
function multiplicacion(a, b) {
  return a * b;
}
function division(a, b) {
  return a / b;
}
