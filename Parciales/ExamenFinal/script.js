var contrasena = document.getElementsByName("password");
var contenido = document.getElementById("contenido");
var contenido2 = document.getElementById("contenido2");
function llenarcontrasena() {
  document.getElementById("password").innerHTML = 1;
}
function marcar(cell) {
  let valor = 0;
  valor = cell.innerHTML;
  console.log(valor);
  contrasena.values += valor;
  //console.log(contrasena.innerHTML);
}

function addFucntion() {
  contrasena.innerHTML = "";
  cells = document.getElementsByClassName("cell");
  for (let i = 0; i < cells.length; i++) {
    cells[i].onclick = function () {
      marcar(this);
    };
  }
}
function pregunta1() {
  contenido.innerHTML = "";
  contenido2.innerHTML = `<div>Estudiante: Aceituno Avalos Miguel Angel</div>
      <div>CU: 35-4351</div>
      <div>Ingenieria de Sistemas</div>`;
}
function pregunta2() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "read.php");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenido.innerHTML = "";
      contenido2.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}
function autenticar() {
  var datos = new FormData();
  fetch("autenticar.php", { method: "POST", body: datos })
    .then((response) => response.text())
    .then((data) => {
      /*document.getElementById("resultado").innerHTML = data;*/
    });
}
function pregunta3() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "tarjeta.php");
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4 && ajax.status == 200) {
      contenido2.innerHTML = "";
      contenido.innerHTML = ajax.responseText;
    }
  };
  ajax.send();
}
function fetchInsertar() {
  fetch("forminsertar.html")
    .then((response) => response.text())
    .then((data) => (document.getElementById("insertar").innerHTML = data));
}
function insertarProducto() {
  var formulario = document.getElementById("form-producto");
  var parametros = new FormData(formulario);
  fetch("create.php", {
    method: "POST",
    body: parametros,
  })
    .then((response) => response.text())
    .then((data) => (document.getElementById("pie").innerHTML = data));
  pregunta2();
}
addFucntion();
