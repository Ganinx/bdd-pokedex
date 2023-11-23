<?php
include'function.php';
$pdo = dbconnect();

$id= $_GET["id"];
$query = $pdo->prepare("SELECT * FROM pokemon WHERE id = :id");
$query -> execute(["id" => $id]);
$resultat = $query->fetch()



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
<?php
if($resultat){
    echo('<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Detail</h1>')
    ?>
        <?php
        echo('<div class="card" style="width: 18rem;">
            <img src="'.$resultat["image"].'" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">'.$resultat['nom'].'</h5>
                <ul>
                <p>'.$resultat["pv"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat["pv"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: '.(($resultat["pv"]/200)*100).'%"></div>
</div>
<p>'.$resultat["attaque"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat["attaque"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-danger" style="width: '.(($resultat["attaque"]/200)*100).'%"></div>
</div>
<p>'.$resultat["defense"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat["defense"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-warning" style="width: '.(($resultat["defense"]/200)*100).'%"></div>
</div>
<p>'.$resultat["vitesse"].'</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat["vitesse"].'" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar bg-success" style="width: '.(($resultat["vitesse"]/200)*100).'%"></div>
</div>
<p>'.$resultat["special"].'</p>
<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="'.$resultat["special"].'" aria-valuemin="0" aria-valuemax="200">
  <div class="progress-bar bg-black" style="width: '.(($resultat["special"]/200)*100).'%"></div>
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



</body>
</html>
