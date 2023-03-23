<?php
$arreglo = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
echo $arreglo[0];
echo $arreglo[1];
?>
<h2>Arreglo completo</h2>
<?php
echo "<pre>";
print_r($arreglo);
echo "</pre";
echo "<h2> Ciclo For</h2>";
for ($i = 0; $i < count($arreglo); $i++) {
    echo "<div>" . $arreglo[$i] . "</div";
}
echo "<h2> Ciclo Foreach </h2>";
foreach ($arreglo as $arre) {
    echo "<div>$arre</div>";
}
echo "<h2> Ciclo Foreach </h2>";
foreach ($arreglo as $arre) {
    echo "<div>$arre</div>";
}
?>