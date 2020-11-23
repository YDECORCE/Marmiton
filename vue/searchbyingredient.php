

<?php
var_dump($letters)

// prevoir un if sur varaible ob_start pour afficher le résultat de la recherche

echo'<div class="container">
    <div class="row">
        <div class="letter">';
        foreach ($letters as $data){
            echo'<a href="index.php?action=searchingredient&letter='.data['letter'].'> '.data['letter'].' -</a>';
        }
        echo'</div></div></div>';
?>
