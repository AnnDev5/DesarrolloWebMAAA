<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $filas =10;
      $columnas = 10;
?>
    <table>
        <tr>
            <?php for($i=0;$i<$filas;$i++){?>
                <?php for($j=0;$j<$columnas;$j++){
                        echo "<td>Columna $j</td>";
                }
            }
            
        ?>
        </tr>
    </table>
</body>
</html>