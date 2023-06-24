<?php
    include("conexion.php");
    $archivo_original = $_FILES['imagen']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);
    $producto = $_POST['producto'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $sql = "INSERT INTO productos (nombre,descripcion,precio,stock,imagen) VALUES ('$producto', '$descripcion', $precio, $stock,'$fotografia')";
    if ($con->query($sql) === TRUE) {
        echo "Se creo el registro correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
