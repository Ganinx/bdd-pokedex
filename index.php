<?php
include 'function.php';

$pdo = dbconnect();






if(array_key_exists("filter",$_GET)){
    $filterGood = ["attaque","defense","special","pv","vitesse"];
    $orderGood = ["asc","desc"];
    $filter = $_GET["filter"];
    $order = $_GET["order"];
    if(in_array($filter ,$filterGood) AND in_array($order, $orderGood)){
        $query = $pdo->prepare("SELECT pokemon.*, types.name FROM pokemon JOIN types ON pokemon.type_id = types.id ORDER BY $filter $order");
        $query -> execute();
        $resultats = $query->fetchALL();
        var_dump($filter);
    }else{
        echo('erreur');
        die();
    };

}else{

    $reponse = $pdo->query('SELECT pokemon.*, types.name FROM pokemon JOIN types ON types.id = pokemon.type_id');
    $resultats = $reponse->fetchALL();
}

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

include'card.php'
?>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
