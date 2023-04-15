<!DOCTYPE html>
<html>
<head>
    <title>Tabla Generada</title>
    <style>
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            font-weight: bold;
            background-color: grey;
        }
    </style>
</head>
<body>
    <h1>Tabla de Multiplicacion</h1>
    <?php
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        echo '<table border="1">';
        for ($i = 0; $i <= $filas; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= $columnas; $j++) {
                if ($i == 0 && $j == 0) {
                    echo '<th></th>';
                } elseif ($i == 0) {
                    echo '<th>' . $j . '</th>';
                } elseif ($j == 0) {
                    echo '<th>' . $i . '</th>';
                }else {
                    echo '<td>' . ($i * $j) . '</td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    ?>
<meta http-equiv="refresh" content="4;url=Maqueta1.html"> 
</body>
</html>