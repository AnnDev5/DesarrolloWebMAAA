var titulo = document.getElementById("titulo");
var mensaje = document.getElementById("mensaje");
var contenido = document.getElementById("contenido");
var contenedor = document.getElementById("contenedor");

function pregunta1() {
  contenedor.style.border = "4px solid black";
  contenido.style.border = "4px solid black";
  titulo.style.backgroundColor = "black";
  titulo.style.border = "4px solid black";
  titulo.style.color = "white";
  mensaje.style.border = "4px solid black";
  mensaje.style.backgroundColor = "black";
  mensaje.style.color = "white";
  a1s = document.getElementsByClassName("boton");
  for (let i = 0; i < a1s.length; i++) {
    a1s[i].style.border = "4px solid black";
  }
  contenido.innerHTML = "Modo blanco y negro";
}
function pregunta2() {
  titulo.innerHTML = "Pregunta 2 DOM en Javascript";
  generar();
}
function generar() {
  let html = "";
  html = `
    <label for="Fila">Fila</label>
    <input type="number" name="fila" id="fila" />
    <br>
    <label for="Columna">Columna</label>
    <input type="number" name="columna" id="columna" />
    <br>
    <button onclick="generarTabla()">Generar</button>
    <br></br>`;
  contenido.innerHTML = html;
}
function generarTabla() {
  var fila = parseInt(document.getElementById("fila").value);
  var columna = parseInt(document.getElementById("columna").value);
  let html = "";
  html = `<table border="1">`;
  for (i = 0; i < fila; i++) {
    html += "<tr>";
    for (j = 0; j < columna; j++) {
      html += "<td>Hola</td>";
    }
    html += "</tr>";
  }
  html += "</table>";
  html += `<br></br>`;
  contenido.innerHTML += html;
  console.log(fila);
  console.log(columna);
}
function pregunta3() {
  titulo.innerHTML = "Pregunta 3 Insertar en fetch";
  fetch("form_insertar.php")
    .then((response) => response.text())
    .then((data) => (contenido.innerHTML = data));
}
function insertarLibro() {
  var form = document.getElementById("form_insertar");
  var datos = new FormData(form);
  var ajax = new XMLHttpRequest();
  ajax.open("POST", "insertar.php", false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200)
      mensaje.innerHTML = ajax.responseText;
  };
  ajax.send(datos);
}
function pregunta4() {
  titulo.innerHTML = `Pregunta 4 Listar con Ajax`;
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "listar.php");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200)
      contenido.innerHTML = ajax.responseText;
  };
  ajax.send();
}
function pregunta5() {
  contenido.innerHTML = `<select id="libros" onchange="fetchImagen()">
    </select>
    <br>
  <div id= "imagen">
  </div>`;
  var select = document.getElementById("libros");
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "datos.php", false);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      var libros = JSON.parse(ajax.responseText);
      console.log(libros);
      for (let i = 0; i < libros.length; i++) {
        select.innerHTML += `<option value="${libros[i].imagen}">${libros[i].titulo}</option>`;
      }
    }
  };
  ajax.send();
}
function fetchImagen() {
  var imagen = document.getElementById("libros").value;
  var div = document.getElementById("imagen");
  div.innerHTML = `<img src="./images/${imagen}" />`;
}
