<?php
ob_start();
foreach ($recipes as $data){
    echo"<a href='index.php?action=detail&id=".$data['id_recettes']."'>".$data['nom_recettes']."</a>";
    echo '<p>'.$data['temps_recettes'].'<p><br/>';
    echo '<p>'.$data['difficulte_recettes'].'<p><br/>';
    echo '<p>'.$data['type_recettes'].'<p><br/>';
    echo '<img src='.$data['image_recettes'].' alt='.$data['nom_recettes'].'><br>';
}

$cequilfautafficher=ob_get_clean();
require_once('template.php');
?>
