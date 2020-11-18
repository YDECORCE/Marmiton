<?php
require_once('controler/controler.php');
if (isset($_GET['action'])&&($_GET['action']=='all')){
    showallrecipes();
}
elseif (isset($_GET['action'])&&($_GET['action']=='detail')){
    showrecipedetail();
}
elseif (isset($_GET['action'])&&($_GET['action']=='search')){
    searchrecipe();
}
else
{
    showfiverecipes();
}

?>