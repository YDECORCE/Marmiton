<?php
require_once('model/recipe.php');

function showallrecipes(){
    $recipes=new recipe;
    $recipes=$recipes->allrecipes();
    require('vue/allrecipes.php');
}

function showfiverecipes(){
    $fiverecipes=new recipe;
    $fiverecipes=$fiverecipes->random();
    require('vue\recipeoftheday.php');
}
function showrecipedetail(){
    $id=$_GET['id'];
    $recipedetail= new recipe;
    $recipedetail= $recipedetail->detailonerecipe($id);
    $recipeingredient=new recipe;
    $recipeingredient =$recipeingredient->onerecipeingredient($id);
    require('vue/onerecipe.php');
}
?>