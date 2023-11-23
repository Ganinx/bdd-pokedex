<?php
include 'function.php';

$pdo = dbconnect();



$reponse = $pdo->query('SELECT * FROM pokemon JOIN types ON types.id = pokemon.type_id');
$resultats = $reponse->fetchALL();
var_dump($resultats);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>pokedex</title>
</head>
<body>
<?php
include 'navbar.php'
?>
<div class="container">
   <div class="row justify-content-center">
       <h1 class="text-center">Pokedex</h1>
       <?php

foreach ($resultats as $pokemon){
    $color='';
    if($pokemon["name"] == "eau"){
        $color = 'blue';
    }elseif($pokemon["name"] == "feu"){
        $color = 'red';
    }elseif($pokemon["name"] == "plante"){
        $color = 'green';
    }elseif($pokemon["name"] == "normal"){
        $color = 'white';
    }elseif($pokemon["name"] == "electrique"){
        $color = 'yellow';
    }elseif($pokemon["name"] == "insecte"){
        $color = '#4dc94d';
    }elseif($pokemon["name"] == "vol"){
        $color = '#9696db';
    }elseif($pokemon["name"]=="poison"){
        $color = '#aa5caa';
    }
    else{
        $color = 'purple';
    }
   echo('<div class="card" style="width: 18rem;">
  <img src="'.$pokemon["image"].'" class="card-img-top" alt="...">
  <div class="card-body" style="background-color:'.$color.'">
    <h5 class="card-title">'.$pokemon['nom'].'</h5>
    <ul>
    <li>attaque :'.$pokemon["attaque"].'</li>
    <li>defense :'.$pokemon["defense"].'</li>
    <li>pv :'.$pokemon["pv"].'</li>
    <li>special :'.$pokemon["special"].'</li>
</ul>
    <a href="detail.php?id='.$pokemon["id"].'" class="btn btn-primary">Go somewhere</a>
  </div>
</div>');
}
?>
   </div>
</div>


</body>
</html>
