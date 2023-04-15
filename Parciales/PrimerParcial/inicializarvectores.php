<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="sumarvectores.php" method="post">
<?php
 /*session_start();*/
 /*$vector =$_GET['a'];
 $b =$_GET['b'];
 $_SESSION['a'] = $a;
 $_SESSION['b'] = $b;*/
$n=$_GET['n'];
for ($i=0;$i<$n;$i++)
{
    /*echo "<input type='number' name='valor[]'>";
    echo "<input type='number' name='valor1[]'><br>";*/
    echo "<input type='number' name='vecA$i'>";
    echo "<input type='number' name='vecB$i'><br>";
}

?>
<input type="hidden" name="n" value="<?php echo $n;?>">

<input type="submit" value="Calcular">
</form>
    
</body>
</html>

<?php
 
?>
<!--<meta http-equiv="refresh" content="4;url=Maqueta1.html">-->