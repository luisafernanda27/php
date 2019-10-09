<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
  $nombre=$_REQUEST['nombre'];
  $edad=$_REQUEST['edad'];
  
  if ($edad>=18)
  {
    echo "Es mayor de edad";
  }
  else
  {
    echo "No es mayor de edad";
  }
  echo "<br>";
  echo "la edad de $nombre es $edad";
?>
</body>
</html>

