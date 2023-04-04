<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="eliminar.php" method="post">
<?php
$n=$_GET['num_elementos'];
$num_mayor=$_GET['num_mayor'];
for ($i=0;$i<$n;$i++)
{
    echo "<input type='number' name='valor[]'>";
}

?>
<input type="hidden" name="num_elementos" value="<?php echo $n;?>">
<input type="hidden" name="num_mayor" value="<?php echo $num_mayor;?>">
<input type="submit" value="eliminar">
</form>
    
</body>
</html>