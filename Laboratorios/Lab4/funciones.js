function mayor(a) {
  var mayor = 0;
  for (var key in a) {
    document.write(a[key]);
  }
}
function mostrarInformacion(estudiantes) {
  document.write("<table>");
  document.write("<tr>");
  document.write("<th>" + "Numero " + "</th>");
  document.write("<th>" + "Apellidos Nombres " + "</th>");
  document.write("<th>" + " Edad " + "</th>");
  document.write("<th>" + "Materia " + "</th>");
  document.write("<th>" + "Nota " + "</th>");
  document.write("</tr>");
  for (var i = 0; i < estudiantes.length; i++) {
    document.write("<tr>");
    document.write("<td>" + (i + 1) + "</td>");
    document.write("<td>" + estudiantes[i].apellidos_nombres + "</td>");
    document.write("<td>" + estudiantes[i].edad + "</td>");
    document.write("<td>" + estudiantes[i].calificaciones.materia + "</td>");
    document.write("<td>" + estudiantes[i].calificaciones.nota + "</td>");
    document.write("</tr>");
  }
  document.write("</table>");
}
