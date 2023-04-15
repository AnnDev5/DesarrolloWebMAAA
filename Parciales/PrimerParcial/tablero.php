<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styletablero.css">
  <title>Tablero de damas</title>
</head>
<body>
  <h1>TABLERO DE DAMAS</h1>
  
  <?php
  $fila=$_GET['fila'];
  $columna=$_GET['columna'];
  $nombre=$_GET['nombre'];
  $color=$_GET['color'];
  $tablero = array(
    array('X', ' ', 'X', ' ', 'X'),
    array(' ', 'X', ' ', 'X', ' '),
    array('X', ' ', 'X', ' ', 'X'),
    array(' ', 'X', ' ', 'X', ' '),
    array('X', ' ', 'X', ' ', 'X'),
  );
    $tablero[$fila-1][$columna-1]='P';
    echo "La Fila:".$fila.'<br>';
    echo "La Columna:".$columna.'<br>'.'<br>';
    echo '<table cellspacing="0" cellpadding="0" border=>';
  for ($i = 0; $i < 5; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 5; $j++) {
      $pintar = $tablero[$i][$j];
      if ($pintar == ' ') {
        echo '<td class="blanco">';
      } else if ($pintar == 'X') {
        echo '<td class="rojo">';
      }else if ($pintar == 'P') {
        echo '<td class="blanco">'.$nombre.'<img src="./image/Bowser.png" width="100px">';
      }
      echo '</td>';
    }
    echo '</tr>';
  }
  ?>
  <meta http-equiv="refresh" content="10;url=Maqueta1.html">
</body>
</html>