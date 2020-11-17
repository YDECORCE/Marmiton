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

?>