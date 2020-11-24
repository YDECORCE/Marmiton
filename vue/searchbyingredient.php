
<?php

ob_start();
// prevoir un if sur varaible ob_start pour afficher le résultat de la recherche

echo'<div class="container contingredient" >
<h2> Index des recettes</h2>
<p> Sélectionner la première lettre d\'un ingrédient</p>
    <div class="row justify-content-center">
        <div class="letter">';
        foreach ($letters as $data){
            echo"<a href='index.php?action=searchingredient&letter=".$data['letter']."'> ".$data['letter']." -</a>";
        }
        echo'</div></div>';

        if(!empty($loopshowingredient)){echo $loopshowingredient;}

        echo'</div>';
$letteringredient =  ob_get_clean();
require_once('template.php');
?>
