<?php
include'function.php';
$pdo = dbconnect();

$id= $_GET["id"];
$query = $pdo->prepare("SELECT * FROM pokemon WHERE id = :id");
$query -> execute(["id" => $id]);
$resultat_pokemon = $query->fetch();



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
include 'navbar.php';
?>
<a href="index.php">retour </a>
<?php
if($resultat_pokemon){
    echo('<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Detail</h1>')
    ?>
        <?php
        echo('<div class="card" style="width: 18rem;">
            <img src="'.$resultat_pokemon["image"].'" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$resultat_pokemon['nom'].'</h5>
                <ul>
                <p>'.$resultat_pokemon["pv"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat_pokemon["pv"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: '.(($resultat_pokemon["pv"]/200)*100).'%"></div>
</div>
<p>'.$resultat_pokemon["attaque"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat_pokemon["attaque"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" style="width: '.(($resultat_pokemon["attaque"]/200)*100).'%"></div>
</div>
<p>'.$resultat_pokemon["defense"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat_pokemon["defense"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-warning" style="width: '.(($resultat_pokemon["defense"]/200)*100).'%"></div>
</div>
<p>'.$resultat_pokemon["vitesse"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat_pokemon["vitesse"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: '.(($resultat_pokemon["vitesse"]/200)*100).'%"></div>
</div>
<p>'.$resultat_pokemon["special"].'</p>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat_pokemon["special"].'" aria-valuemin="0" aria-valuemax="200">
  <div class="progress-bar bg-black" style="width: '.(($resultat_pokemon["special"]/200)*100).'%"></div>
</div>
                </ul>
            </div>
        </div>');
        ?>

<?php
echo('
</div>
</div>');
}else{
    echo('ERREUR');
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
