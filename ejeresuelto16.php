<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
$registro[]="20456322";
$registro[]="Martinez Pablo";
$registro[]="Colon 134";
?>

<?php
$registro['dni']="20456322";
$registro['nombre']="Martinez Pablo";
$registro['direccion']="Colon 134";
echo $registro['nombre'];
?>

<?php
$registro=array('dni'=>'20456322',
                'nombre'=>'Martinez Pablo',
                'direccion'=>'Colon 134');
echo $registro['dni'];
?>

</body>
</html>