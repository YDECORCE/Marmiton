<?php
ob_start();
$search=$_GET['text'];

echo "<h2> Voici les résultats pour la recherche : ".$search."</h2>";
echo'<div class="container d-flex allrecipes">';
foreach ($findrecipe as $data){
    echo"<div class='col-12 col-sm-6 col-lg-4 m-0'><div class='card'>
        <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
        <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%; display:block'></div>      
        </div></div>";
    }
echo'</div>';

$searchrecipe=ob_get_clean();
require_once('template.php');
?>