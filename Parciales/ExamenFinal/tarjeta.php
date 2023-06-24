<?php
include('conexion.php');
$sql = "SELECT * FROM clientes";
$resultado = $con->query($sql);
?>
<?php while ($cliente = $resultado->fetch_assoc()) { ?>
  <div class="tarjeta">
    <div><img src="images/<?php echo $cliente['imagen'] ?>" class="escudo"></div>
    <div>
      <h3><?php echo $cliente['nombre'] ?></h3>
    </div>
    <div>Correo electronico:</div>
    <div>
      <?php echo $cliente['correo_electronico'] ?>
    </div>
    <div>Telefono:<?php echo $cliente['telefono'] ?></div>
    <div>Direccion:<?php echo $cliente['direccion'] ?></div>
  </div>
  </div>
<?php } ?>