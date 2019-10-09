 <html>
  <head>
  <title>Problema</title>
  </head>
  <body>
  <?php
  $radio1=$_REQUEST['radio1'];
  $nombre=$_REQUEST['nombre'];

  if ($_REQUEST['radio1']=="sin")
  {
   
    echo "$nombre no tiene estudios";
  }
  else
    if ($_REQUEST['radio1']=="primaria")
  {
   
    echo "$nombre tiene estudios primarios";
  }
  else
    if ($_REQUEST['radio1']=="secundaria")
  {
   
    echo "$nombre tiene estudios secundarios";
  }

  ?>
  </body>
  </html>
