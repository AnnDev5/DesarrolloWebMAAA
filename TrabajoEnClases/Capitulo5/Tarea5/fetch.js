function listar() {
    var contenedor;
  
    contenedor = document.getElementById('datos');
    fetch('read_depto.php')
        .then(response => response.text())
        .then(data => {
            objeto = JSON.parse(data);
            console.log(objeto);
            //html = dibujar(objeto);
            //contenedor.innerHTML = html;
        }
);}
function listarProvincia(id) {
    var contenedor = document.getElementById('datos');
    fetch('read_provincia.php?id='+id)
        .then(response => response.text())
        .then(data => {
            console.log(data);
            objeto = JSON.parse(data);
            console.log(objeto);
                //html = dibujar(objeto);
                //contenedor.innerHTML = html;
            }
    );} 
    function dibujar(objeto) {
        console.log(objeto.length);     
      let html=`<table>
                <tr>
                <th>Fotografia</th>
                <th> Nombres</th>
                <th>Apellidos </th>
                <th>Celular</th>
                <th>Profesion</th>
                <th>Operaciones</th>
                </tr>`;
       for (i=0;i<objeto.length;i++)
       {
        html+=`<tr>
        <td><img width="100px" src="images/${objeto[i].fotografia} alt=""> </td>
        <td>${objeto[i].nombres} </td>
        <td>${objeto[i].apellidos}</td>
        <td>${objeto[i].celular}</td>
        <td>${objeto[i].profesion}</td>
        <td><a href="javascript:editarPersona(${objeto[i].id})">Editar</a>
        <a href="javascript:eliminarPersona(${objeto[i].id})">Eliminar</a>
        </td></tr>`
       } 
       html+=`</table>`;
       return html;
    }
    function cargarContenido(abrir) {
        var contenedor;
        contenedor = document.getElementById('datos');
        fetch(abrir)
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
    function editarPersona(id) {
        var contenedor;
        contenedor = document.getElementById('datos');
        fetch('form_update.php?id=' + id)
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
    function crearPersona() {
        var contenedor;
        contenedor = document.getElementById('datos');
        var formulario = document.getElementById("form-persona");
        var parametros = new FormData(formulario);
        fetch("create.php",
            {
                method: "POST",
                body: parametros
            })
            .then(response => response.text())
            .then(data => contenedor.innerHTML = data);
    }
