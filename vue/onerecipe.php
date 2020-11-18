<?php
foreach ($recipedetail as $data)
    {
echo $data['nom_recettes'];
echo $data['temps_recettes'];
echo $data['type_recettes'];
echo $data['difficulte_recettes'];
echo $data['cout_recettes'];
$nbredepersonne=$data['nombre_personnes'];
echo $data['nombre_personnes'];
    }

$nbrepersonneajust=12;
echo $nbrepersonneajust;
echo'<h5>la liste des ingrédients</h5>';
foreach ($recipeingredient as $data)
    {
    $quantite=(($nbrepersonneajust/$nbredepersonne)*$data['quantite_make']);
    echo $data['nom_ingredients'].' : '.$quantite.' '.$data['unite_make'].'</br>';
    }

?>