<?php
$celcius = 37.841;
$fahreinheit = (9/5 * $celcius) + 32;
$reamur = $celcius * 4 / 5;
$kelvin = $celcius + 273.15;

echo round ($fahreinheit, 4);
echo "<br>";
echo round ($reamur, 4);
echo "<br>";
echo round ($kelvin, 4);

?>
