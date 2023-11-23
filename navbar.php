<?php



$query = $pdo->query("SELECT  DISTINCT types.name,image_type FROM types JOIN pokemon on pokemon.type_id = types.id");
$results = $query->fetchAll();

?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                foreach ($results as $resultat) {
                    echo('<li class="nav-item">
                    <a href="types.php?type='.$resultat["name"].'" class="nav-link" ><img src="'.$resultat["image_type"].'" style="max-width:70px" alt=""></a>
                </li>');
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        filtre
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="filtre-attaque.php">Decroissant attaque</a></li>
                        <li><a class="dropdown-item" href="filtre-defense.php">Decroissant defense</a></li>
                        <li><a class="dropdown-item" href="filtre-pv.php">Decroissant pv</a></li>
                        <li><a class="dropdown-item" href="filtre-special.php">Decroissant spécial</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
?>