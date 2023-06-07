function mayor(estudiantes) {
  var mayor = 0;
  var indicemayor=0;
  for (var i = 0; i < estudiantes.length; i++) {
    if(mayor<estudiantes[i].calificaciones.nota){
      mayor = estudiantes[i].calificaciones.nota;
      indicemayor=i;
    }
  }
  return indicemayor;
}
function mostrarInformacion(estudiantes) {
  html = `<table>
  <tr>
  <th>Numero</th>
  <th>Apellidos Nombres</th>
  <th>Edad</th>
  <th>Materia</th>
  <th>Nota</th>
  </tr>`
  for (var i = 0; i < estudiantes.length; i++) {
    html+=`<tr id='indice${i}'>
    <td>${i + 1}</td>
    <td>${estudiantes[i].apellidos_nombres}</td>
    <td>${estudiantes[i].edad}</td>
    <td>${estudiantes[i].calificaciones.materia}</td>
    <td>${estudiantes[i].calificaciones.nota}</td>
    </tr>`
  }
  html+=`</table>`
  document.getElementById('tabla').innerHTML = html;
}
