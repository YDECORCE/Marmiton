<?php
ob_start();
$starrecipe = array_slice($fiverecipes,0, 1); 
$otherrecipes = array_slice($fiverecipes,1, 4); 
echo"<div class='leftcolumn'>";
foreach ($starrecipe as $data){
    echo"<div class='card'>
    <h2>".$data['nom_recettes']."</h2>
    <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style=' width:100%;
    height:50vh; display:block'></div>
      <p>".$data['temps_recettes']."<p>
      <p>".$data['difficulte_recettes']."<p>
      <p>".$data['type_recettes']."<p>
      <p>".$data['recette_recettes']."</p>
</div>";
}
echo'</div><div class="rightcolumn">';
foreach($otherrecipes as $data){

    echo"<div class='card'>
      <h3>".$data['nom_recettes']."</h3>
      <div class='fakeimg'><img src=".$data['image_recettes']." alt=".$data['nom_recettes']." style='height : 50vh; width:100%; display:block'></div>      
    </div>";
}
echo"</div>";
$loopfiverecipes =  ob_get_clean();
require_once('template.php');
?>
