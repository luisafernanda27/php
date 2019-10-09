<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$valor=rand(1,3);
echo "El valor ganador es $valor<br>";
if ($valor==1)
{
  echo "uno";
}
elseif ($valor==2)
  {
    echo "dos";
  }
  elseif ($valor==3)
  {
    echo "tres";
  }

?>
</body>
</html>