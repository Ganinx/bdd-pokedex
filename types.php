<?php
include'function.php';
$pdo = dbconnect();

$type= $_GET["type"];
$query = $pdo->prepare("SELECT pokemon.* FROM pokemon JOIN types ON pokemon.type_id = types.id WHERE name = :type");
$query -> execute(["type" => $type]);
$resultats = $query->fetchAll()



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Pokedex</title>
</head>
<body>
<?php
include 'navbar.php'
?>
<a href="index.php">retour </a>
<div class="row">


<?php
foreach($resultats as $pokemon){
    echo('<div class="card" style="width: 18rem;">
  <img src="'.$pokemon["image"].'" class="card-img-top" alt="...">
  <div class="card-body">
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


</body>
</html>
