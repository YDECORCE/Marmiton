<?php
ob_start();
$starrecipe = array_slice($fiverecipes,0, 1); 
$otherrecipes = array_slice($fiverecipes,1, 4); 
echo"<div class='container p-0'><div class='row w-100'><div class='col-12 col-sm-12 col-lg-8'>";
foreach ($starrecipe as $data){
    
    echo"<div class='card'>
    <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
    <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%'></div>
    <div class='info'>
        <p>Durée : ".$data['temps_recettes']."</p>
        <p>Difficulté : ".$data['difficulte_recettes']."</p>
        <p>Coût : ".$data['cout_recettes']."</p>
    </div>
    </div>";
}

echo"</div><div class='col-12 col-sm-12 col-lg-4 p-0 m-0'>";
foreach($otherrecipes as $data){

    echo"<div class='col-12 col-sm-6 col-lg-12 m-0'><div class='card'>
      <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
      <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%'></div>      
    </div></div>";
}
echo"</div>";
$loopfiverecipes =  ob_get_clean();
require_once('template.php');
?>
