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
}elseif($pokemon["name"] == "elektrik"){
$color = 'yellow';
}elseif($pokemon["name"] == "insecte"){
$color = '#4dc94d';
}elseif($pokemon["name"] == "vol"){
$color = '#82BAEF';
}elseif($pokemon["name"]=="poison"){
$color = '#aa5caa';
}elseif ($pokemon["name"]=="sol"){
$color = '#92501B ';
}elseif ($pokemon["name"]=="combat"){
$color= '#FF8100 ';
}elseif ($pokemon["name"]=="roche"){
$color = '#B0AA82 ';
}elseif ($pokemon["name"]=="psy"){
    $color = '#EF3F7A';
}elseif ($pokemon["name"]=="glace"){
    $color = '#3DD9FF';
}elseif ($pokemon["name"]=="spectre"){
    $color = '#703F70';
}elseif ($pokemon['name']=='acier'){
    $color = '#FAC100';
}elseif($pokemon['name'] == 'dragon'){
    $color = '#4F60E2';
}elseif ($pokemon['name']=='fée'){
    $color = '#EF70EF';
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
        <a href="detail.php?id='.$pokemon["id"].'" class="btn btn-primary">Voir détail</a>
    </div>
</div>');
}