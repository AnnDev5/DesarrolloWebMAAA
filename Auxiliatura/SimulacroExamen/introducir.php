  <?php 
  $n = $_GET['n'];
  for ($i = 0; $i < $n; $i++) {
    echo '<input type="number" name="valores"> <br/>';
  }
    echo '<button onclick = "sumar()">Sumar</button> <br/>';
  ?>
