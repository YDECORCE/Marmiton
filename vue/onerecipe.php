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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
        <title>Chef Cuisine</title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>

</head>
<div class='container'>
    <h2>Titre de la recette</h2>
    <div class='propimage'>
    <img src='public/img/pizza.jpg' alt='blabla'>
    </div>
    <div class="inforecette">
        <p>Durée :</p>
        <p>Type :</p>
        <p>Difficulté :</p>
        <p>Coût :</p>
    </div>
    <div class="ingredient">
        <form method='get' action='index.php?action=detail&id=8&'>
        <label for='nbrepers'>Nombre de Personne</label>
        <input type="range" name='nbrpers' value="4" min="1" max="12" id='nbrepers' oninput="this.nextElementSibling.value = this.value">
        <output>4</output>
        <button type='submit' name='calcul' value='calc'>Calculer</button>
        </form>
        <p>ingrédient 1</p>
        <p>ingrédient 1</p>
        <p>ingrédient 1</p>
    </div>
    <div class="recette">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, quasi? Numquam, autem quas eaque vel iusto cum enim fugit iste consequatur neque facere voluptatibus velit harum nobis, voluptatum placeat dolores?</p>
    </div>
</div>