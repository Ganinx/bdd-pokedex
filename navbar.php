<?php



$query = $pdo->query("SELECT  DISTINCT types.name FROM types JOIN pokemon on pokemon.type_id = types.id");
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <?php
                foreach ($results as $resultat) {
                    echo('<li class="nav-item">
                    <a href="types.php?type='.$resultat["name"].'" class="nav-link" >'.$resultat["name"].'</a>
                </li>');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<?php
?>