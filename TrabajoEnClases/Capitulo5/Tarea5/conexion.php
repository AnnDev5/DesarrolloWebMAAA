<?php
$con =new mysqli("localhost", "root", "","bolivia");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>