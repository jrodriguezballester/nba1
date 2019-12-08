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
   <h1> Equipos de la nba</h1>
    <?php  
    foreach ($equipos as $equipo) {
    echo '<a href="../public/Equipos/'.$equipo->Nombre.'">'.$equipo->Nombre."</a><br>";   
    }
    ?>
    </div>
</div>    
</body>
</html>