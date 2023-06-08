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
            contenido.innerHTML += ajax.responseText;
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
function llenar() {
    var numinicio =document.getElementById("numinicio").value;
    var operacion=obtenerValor();
    var numfinal =document.getElementById("numfinal").value;
    fetch("calcular.php?operacion="+operacion+"&"+"numinicio="+numinicio+"&"+"numfinal="+numfinal)
        .then(response => response.text())
        .then(data => {
            objeto = JSON.parse(data);
                html = dibujar(objeto);
                contenido.innerHTML = html;
            }
    );} 
    function dibujar(objeto) {
        let resultado=0;
        let html=`<table>`
       for (i=0;i<objeto[2];i++)
       {
        html+=`<tr>
        <td class="celda">${objeto[1]} </td>`
        switch(objeto[0]){
            case "suma":html+=`<td class="celda">+</td>`;
            resultado=suma(parseInt(objeto[1]),(i+1));
            break;
            case "resta":html+=`<td class="celda">-</td>`;
            resultado=resta(parseInt(objeto[1]),(i+1));
            break;
            case "multiplicacion":html+=`<td class="celda">*</td>`;
            resultado=multiplicacion(parseInt(objeto[1]),(i+1));
            break;
            case "division":html+=`<td class="celda">/</td>`;
            resultado=division(parseInt(objeto[1]),(i+1));
            break;
            default:
        }
        
        html+=`<td class="celda">${(i+1)}</td>
        <td class="celda">=</td>
        <td class="celda">${resultado}</td>
        </tr>`
       }
       html+=`</table>`;
       return html;
    }
function obtenerValor() {
    var radios = document.getElementsByName('operacion');
    for (var i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
        var valorSeleccionado = radios[i].value;
        return valorSeleccionado;
      }
    }
  }
  function suma(a,b){
    return a+b;
  }
  function resta(a,b){
    return a-b;
  }
  function multiplicacion(a,b){
    return a*b;
  }
  function division(a,b){
    return a/b;
  }