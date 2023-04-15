<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th, td {
        background-color:#00B050;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        color: white;
    }

    th {
        background-color: #00B050;
        color: white;
        text-align:center;
    }
    </style>
</head>
<body>
<h1>CALCULAR LA SUMA DE 2 NUMEROS</h1>
<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$suma=$numero1+$numero2;
echo "<table>";
    echo "<tr>";
    echo "<td>$numero1</td>";
    echo "<td>+</td>";
    echo "<td>$numero2</td>";
    echo "<td>=</td>";
    echo "<td>$suma</td>";
    echo "</tr>";
echo "</table>";

?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html"> 
</body>
</html>

