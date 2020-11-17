<?php
ob_start();
foreach ($fiverecipes as $data){
    echo"<div class='card'>
    <h2>".$data['nom_recettes']."</h2>
    <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' background-size:100% auto ; height : 100%; width:100%; display:block'></div>
      <p>".$data['temps_recettes']."<p>
      <p>".$data['difficulte_recettes']."<p>
      <p>".$data['type_recettes']."<p>
      <p>".$data['recette_recettes']."</p>
</div>";
}
$loopfiverecipes =  ob_get_clean();
require_once('template.php');
?>
