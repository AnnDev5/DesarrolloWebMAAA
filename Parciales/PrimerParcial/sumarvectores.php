<!DOCTYPE html>
<html>
<head>
    <title>Tabla Generada</title>
</head>
<body>
    <h1>TABLA DE SUMA</h1>
    <?php
    $n=$_POST['n'];
    $suma=[];
    for ($j=0;$j<$n;$j++)
    {
        $resultado=0;
        $resultado=$_POST['vecA'.$j]+$_POST['vecB'.$j];
        $suma[$j]=$resultado;
    }

    for ($j=0;$j<$n;$j++)
    { 
        echo '<div style="border: 1px solid;width: 50px; height: 50px; text-aling:center; display: flex; justify-content: center; align-items: center;">'.$_POST['vecA'.$j].'+'.$_POST['vecB'.$j].'</div>';
        echo '<div style="border: 1px solid;width: 50px; height: 50px; text-aling:center; display: flex; justify-content: center; align-items: center;">'.$suma[$j].'</div>';
    }

?>
<meta http-equiv="refresh" content="15;url=Maqueta1.html">
</body>
</html>
<?php
