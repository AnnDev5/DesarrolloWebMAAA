function introducirDatos() {
  var nombre = prompt("Introduzca su nombre completo");
  var cu = prompt("Introduzca su Carnet Universitario");
  var fecha = prompt("Introduzca la fecha de hoy");
  document.getElementById("nombre").innerHTML = "Nombre: " + nombre;
  document.getElementById("cu").innerHTML = "CU: " + cu;
  document.getElementById("hoy").innerHTML = "Hoy es: " + fecha;
}
introducirDatos();
