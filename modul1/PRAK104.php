<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
$hp = ["Samsung Galaxy S22","Samsung Galaxy S22", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
echo "<table border='1'>";
echo "<tr>";
echo "<th>";
echo "Daftar Smartphone Samsung";
echo "</th>";
echo "</tr>";
foreach ($hp as $handphone) {
 
	echo "<tr><td>". $handphone ."</td></tr>";
}
echo "</table>";
?>	
</body>
</html>

