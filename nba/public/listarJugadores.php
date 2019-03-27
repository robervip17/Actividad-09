<?php
require "./src/Jugador.php";
  $j=new Jugador();
  $j->conectar();
  $listaJugador=$j->listarJugadores();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/nba.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- listado -->
    <table border=1 cellpadding=4 cellspacing=0 width="100%">
     <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Peso</th>
       <th>Altura</th>
     </tr>
     <?php
     foreach ($listaJugador as $usuarios) {
       echo "<tr>";
       echo "<td>".$usuarios['codigo']."</td>";
       echo "<td>".$usuarios['Nombre']."</td>";
       echo "<td>".$usuarios['Peso']."</td>";
       echo "<td>".$usuarios['Altura']."</td>";}
     ?>
   </table>
  </body>
</html>
