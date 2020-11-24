<?php
ob_start();

echo'<h2>Toutes nos recettes.</h2><div class="container d-flex allrecipes p-0">';
foreach ($recipes as $data){
    echo"<div class='col-12 col-sm-6 col-lg-4 m-0 p-0'><div class='card m-3'>
        <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
        <div ><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." class='fakeimg'></div>      
        </div></div>";
    }
echo'</div>';

$loopallrecipes=ob_get_clean();
require_once('template.php');
?>
