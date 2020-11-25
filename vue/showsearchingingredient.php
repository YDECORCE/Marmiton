<?php
ob_start();
echo'<div class="container d-flex" style="flex-wrap:wrap">';
foreach($ingredient as $data){
    echo"<div class='col-6 col-lg-2'><div class='card ficheingredient'>
      <a href='index.php?action=recipebyingredient&text=".$data['nom_ingredients']."&id=".$data['id_ingredients']."'>".$data['nom_ingredients']."</a>
      <div class='fakeimg'><img src=".$data['image_ingredients']." alt=".$data['nom_ingredients']." style='max-width:60px height:auto'></div>      
    </div></div>";
}

echo'</div>';

// a faire un ob_start qui require searchbyingredient.php

$loopshowingredient =  ob_get_clean();
require_once('searchbyingredient.php');
?>