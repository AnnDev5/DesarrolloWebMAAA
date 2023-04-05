<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Tablero de damas</title>
</head>
<body>
  <h1>TABLERO DE DAMAS</h1>
  
  <?php
  $fila=$_GET['fila'];
  $columna=$_GET['columna'];
  $tablero = array(
    array('X', ' ', 'X', ' ', 'X', ' ', 'X', ' '),
    array(' ', 'X', ' ', 'X', ' ', 'X', ' ', 'X'),
    array('X', ' ', 'X', ' ', 'X', ' ', 'X', ' '),
    array(' ', 'X', ' ', 'X', ' ', 'X', ' ', 'X'),
    array('X', ' ', 'X', ' ', 'X', ' ', 'X', ' '),
    array(' ', 'X', ' ', 'X', ' ', 'X', ' ', 'X'),
    array('X', ' ', 'X', ' ', 'X', ' ', 'X', ' '),
    array(' ', 'X', ' ', 'X', ' ', 'X', ' ', 'X'),
  );
    $tablero[$fila-1][$columna-1]='P';
    echo "La Fila:".$fila.'<br>';
    echo "La Columna:".$columna.'<br>'.'<br>';
    echo '<table cellspacing="0" cellpadding="0" border=>';
  for ($i = 0; $i < 8; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 8; $j++) {
      $pintar = $tablero[$i][$j];
      if ($pintar == ' ') {
        echo '<td class="blanco">';
      } else if ($pintar == 'X') {
        echo '<td class="azul">';
      }else if ($pintar == 'P') {
        echo '<td class="rojo">';
      }
      echo '</td>';
    }
    echo '</tr>';
  }
  ?>
  <meta http-equiv="refresh" content="10;url=Ejercicio3.html">
</body>
</html>