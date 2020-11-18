<?php
require_once('model/recipe.php');

function showallrecipes(){
    $recipes=new Recipe;
    $recipes=$recipes->allrecipes();
    require('vue/allrecipes.php');
}

function showfiverecipes(){
    $fiverecipes=new Recipe;
    $fiverecipes=$fiverecipes->random();
    require('vue\recipeoftheday.php');
}
function showrecipedetail(){
    $id=$_GET['id'];
    $recipedetail= new Recipe;
    $recipedetail= $recipedetail->detailonerecipe($id);
    $recipeingredient=new Recipe;
    $recipeingredient =$recipeingredient->onerecipeingredient($id);
    require('vue/onerecipe.php');
}
function searchrecipe(){
    $search=$_GET['text'];
    $findrecipe=new Recipe;
    $findrecipe=$findrecipe->searchrecipes($search);
    if (count($findrecipe)!=NULL){
    require('vue/searchresult.php');
    }
    else{ require('vue/erreur.php');}
}
?>