<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Portada</title>
    <link rel="stylesheet" type="text/css" media="screen" href={{asset('/css/main.css')}} />
</head>
<body>
    
    @include ("menu")
<div id="content">
    <div id="players">   
   <h1>{{  $datosEquipo[0]->Nombre }}</h1>
  <?php
      // echo $datosEquipo[0]->Nombre .'****----<br>';
   
        foreach ($jugadores as $key => $jugador) {
   //         echo $key.'<br>';
   //         echo $value.' ****<br>';
          //  echo $jugador->Nombre.' <br>';
            echo '<a href="../Jugador/'.$jugador->codigo.'">'.$jugador->Nombre."</a><br>";  
        }

    
   ?>
    </div>
</div>    
</body>
</html>