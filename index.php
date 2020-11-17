<?php
require_once('controler/controler.php');
if (isset($_GET['action'])&&($_GET['action']=='all')){
    showallrecipes();
}
else{
    showfiverecipes();
}

?>