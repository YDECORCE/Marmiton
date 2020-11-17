<?php
echo '<h2>Les recettes du jour</h2>';
foreach ($fiverecipes as $data){
    echo '<p>'.$data['nom_recettes'].'<p><br/>';
    echo '<p>'.$data['temps_recettes'].'<p><br/>';
    echo '<p>'.$data['difficulte_recettes'].'<p><br/>';
    echo '<p>'.$data['type_recettes'].'<p><br/>';
    echo '<img src='.$data['image_recettes'].' alt='.$data['nom_recettes'].'>';
}

?>