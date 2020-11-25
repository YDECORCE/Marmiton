<?php
require_once('model/recipe.php');
require_once('model/ingredient.php');

function showallrecipes()
    {
    $recipes=new Recipe;
    $recipes=$recipes->allrecipes();
    require('vue/allrecipes.php');
    }

function showfiverecipes()
    {
    $entree=new Recipe;
    $dish=new Recipe;
    $dessert=new Recipe;
    $entree=$entree->randomrecipe('Entrée');
    $dish=$dish->randomrecipe('Plat');
    $dessert=$dessert->randomrecipe('Dessert');
    require('vue\recipeoftheday.php');
    }
function showrecipedetail()
    {
    $id=$_GET['id'];
    $recipedetail= new Recipe;
    $recipedetail= $recipedetail->detailonerecipe($id);
    $recipeingredient=new Recipe;
    $recipeingredient =$recipeingredient->onerecipeingredient($id);
    require('vue/onerecipe.php');
    }
function searchrecipe()
    {
    $search=$_GET['text'];
    $findrecipe=new Recipe;
    $findrecipe=$findrecipe->searchrecipes($search);
    if (count($findrecipe)!=NULL){
    require('vue/searchresult.php');
        }
    else{ require('vue/erreur.php');}
    }
function ShowIngredientletters()
    {
    $letters=new Ingredient;
    $letters=$letters->IngredientLetter();
    require('vue/searchbyingredient.php');
    }
function ShowIngredient()
    {
    $letters=new Ingredient;
    $letters=$letters->IngredientLetter();
    $letter=$_GET['letter'];
    $ingredient=new Ingredient;
    $ingredient=$ingredient->ShowIngredient($letter);
    require('vue/showsearchingingredient.php');
    }
function searchrecipebyingredient()
    {
    $id=$_GET['id'];
    $findrecipe=new Recipe;
    $findrecipe=$findrecipe->SearchRecipesbyIngredient($id);
    require('vue/searchresult.php');
    }
?>