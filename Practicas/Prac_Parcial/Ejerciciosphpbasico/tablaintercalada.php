<!DOCTYPE html>
<html>

<head>
    <title>Tabla intercalada</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
            width: 100vh;
            margin: 20px auto;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid black;
            text-align: center;
        }

        .rojo {
            background-color: red;
            color: white;
        }

        .amarillo {
            background-color: yellow;
        }

        .verde {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["filas"]) && isset($_POST["columnas"])) {
            $filas = $_POST["filas"];
            $columnas = $_POST["columnas"];

            echo "<h1>Tabla intercalada</h1>";
            echo "<table>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    $clase = "";
                    if ($i % 3 == 0) {
                        $clase = "verde";
                    } elseif ($i % 3 == 1) {
                        $clase = "rojo";
                    } else {
                        $clase = "amarillo";
                    }
                    echo "<td class='$clase'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
<meta http-equiv="refresh" content="4;url=Maqueta1.html">