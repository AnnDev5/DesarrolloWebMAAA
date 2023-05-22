class Estudiante {
    constructor(apellidos_nombres, edad, calificaciones) {
      this.apellidos_nombres = apellidos_nombres;
      this.edad = edad;
      this.calificaciones = calificaciones;
    };

mostrarInformacion(i) {
    document.write("<tr>");
    document.write("<td>"+ i +"</td>");
    document.write("<td>"+ this.apellidos_nombres+"</td>");
    document.write("<td>"+ this.edad+"</td>");
    this.calificaciones.forEach(calificacion => {
      document.write("<td>" + calificacion.materia +"</td>");
      document.write("<td>" + calificacion.nota +"</td>");
    });
    document.write("</tr>");
  }
};