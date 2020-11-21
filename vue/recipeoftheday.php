<?php
ob_start();
$starrecipe = array_slice($fiverecipes,0, 1); 
$otherrecipes = array_slice($fiverecipes,1, 4); 
echo"<div class='leftcolumn'>";
foreach ($starrecipe as $data){
    $text=str_replace ("/*","</p><p>",$data['recette_recettes']);
    $text=substr($text,0,149).'...';
    echo"<div class='card'>
    <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
    <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' ; width:100%;height :600px; display:block'></div>
    <div class='inforecette'>
        <p>Durée : ".$data['temps_recettes']."</p>
        <p>Type : ".$data['type_recettes']."</p>
        <p>Difficulté : ".$data['difficulte_recettes']."</p>
        <p>Coût : ".$data['cout_recettes']."</p>
</div>
      <p>".$text."</p>
</div>";
}
echo'</div><div class="rightcolumn">';
foreach($otherrecipes as $data){

    echo"<div class='card'>
      <a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>
      <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%; display:block'></div>      
    </div>";
}
echo"</div>";
$loopfiverecipes =  ob_get_clean();
require_once('template.php');
?>
