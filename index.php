<?php
require_once('controler/controler.php');
if (isset($_GET['action'])&&($_GET['action']=='all')){
    showallrecipes();
}
elseif (isset($_GET['action'])&&($_GET['action']=='detail')){
    showrecipedetail();
}
elseif (isset($_GET['action'])&&($_GET['action']=='rechercher')){
    searchrecipe();
}
elseif(isset($_GET['action'])&&($_GET['action']=='searchingredient')&&(!isset($_GET['letter']))){
    ShowIngredientletters();
}
elseif(isset($_GET['action'])&&($_GET['action']=='searchingredient')&&(isset($_GET['letter']))&&!empty($_GET['letter'])){
    ShowIngredient();
}
elseif (isset($_GET['action'])&&($_GET['action']=='recipebyingredient')){
    searchrecipebyingredient();
}
else{
    showfiverecipes();
}
?>