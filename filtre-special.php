<?php
include'function.php';
$pdo = dbconnect();


$query = $pdo->query("SELECT pokemon.*, types.name FROM pokemon JOIN types ON pokemon.type_id = types.id ORDER BY special DESC");
$resultats = $query->fetchAll();


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

echo('<h1 class="text-center my-5">Les types ' . $resultats[0]['name'] . '</h1>');
?>
<div class="row container justify-content-center mx-auto">


    <?php
    include'card.php'
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
