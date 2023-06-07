function pregunta1(){
    mensaje.innerHTML = `Pregunta1`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "cambiaratributos.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}
function pregunta2(){
    mensaje.innerHTML = `Pregunta 2 Llamar por fetch`
    fetch("tabla.html")
        .then(response => response.text())
        .then(data => contenido.innerHTML = data);
}

function pregunta3(){
    mensaje.innerHTML = `Pregunta 3`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "seleccionar.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}
function mostrarCalendario(){
    var mes=document.getElementById("meses").value;
    var anio=document.getElementById("anio").value;
    var ajax = new XMLHttpRequest()
    ajax.open("get", "calendario.php?mes="+mes+"&"+"anio="+anio);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}
function aplicarCambios(){
    var alto = document.getElementById("alto").value;
    var ancho = document.getElementById("ancho").value;
    var colorFondo = document.getElementById("colorFondo").value;
    var colorLetra = document.getElementById("colorLetra").value;
    var objeto = document.getElementById("objetos").value;
    document.getElementById(objeto).style.backgroundColor = colorFondo;
    document.getElementById(objeto).style.color = colorLetra;
    document.getElementById(objeto).style.width = ancho+"px";
    document.getElementById(objeto).style.height = alto+"px";
}
function llenar(){
    var numinicio =document.getElementById("numinicio").value;
    var operacion=obtenerValor();
    var numfinal =document.getElementById("numfinal").value;
    var ajax = new XMLHttpRequest()
    ajax.open("get", "calcular.php?operacion="+operacion+"&"+"numinicio="+numinicio+"&"+"numfinal="+numfinal);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
} 
function obtenerValor() {
    var radios = document.getElementsByName('miGrupo');
    for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
        var valorSeleccionado = radios[i].value;
        return valorSeleccionado;
      }
    }
  }