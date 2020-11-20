<?php
ob_start();

echo'<div class="container allrecipes">';
foreach ($recipes as $data){
    echo"<div class='fiche'>
        <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
        <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%; display:block'></div>      
        </div>";
    }
echo'</div>';

$loopallrecipes=ob_get_clean();
require_once('template.php');
?>
