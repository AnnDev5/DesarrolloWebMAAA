<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mistyle.css" />
</head>
<body>
<?php
$nombre=$_GET['nombre'];
$ciudad=$_GET['ciudad'];?>
<div>
    <?php
echo "<p id='parrafo-2'>Su nombre es: <span class='bolded'>$nombre</span><p>";
    ?>
</div>
<?php
echo "<p id='parrafo-2'>Su ciudad es: <span class='rojo'>$ciudad</span></p>";
?> 
</body>
</html>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">
