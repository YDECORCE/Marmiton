<?php
ob_start();
$url=$_SERVER['REQUEST_URI'];
// echo $url;
$url=substr($url,27);
// echo '<br/>'.$url;
// echo '<br/>';
// echo $url;
// $url=rawurldecode($url);
// echo '<br/>';
// echo $url;
echo"<div class='container'>";

foreach ($recipedetail as $data)
    {
        echo"<div class='container'>
    <h2>".$data['nom_recettes']."</h2>
    <div class='propimage'>
    <img src=".$data['image_recettes']." alt=".$data['nom_recettes'].">
    </div>
    <div class='inforecette'>
        <p>Durée : ".$data['temps_recettes']."</p>
        <p>Type : ".$data['type_recettes']."</p>
        <p>Difficulté : ".$data['difficulte_recettes']."</p>
        <p>Coût : ".$data['cout_recettes']."</p>
    </div>
    <div class='recette'>
        <p>".$data['recette_recettes']."</p>
    </div>";
    $nbredepersonne=$data['nombre_personnes'];

    }
    if (isset($_GET['nbrpers'])){
$nbrepersonneajust=$_GET['nbrpers'];}
else {$nbrepersonneajust=$nbredepersonne;}

echo"<div class='ingredient'>
<form method='get' action='index.php'>
<input hidden name='action' value=".rawurlencode($url).">
<label for='nbrepers'>Nombre de Personne</label>
<input type='range' name='nbrpers' value='".$nbrepersonneajust."' min='1' max='12' id='nbrepers' oninput='this.nextElementSibling.value = this.value'>
<output>".$nbrepersonneajust."</output>
<button type='submit' name='calcul' value='calc'>Calculer</button>
</form>";

foreach ($recipeingredient as $data)
    {
    $quantite=(($nbrepersonneajust/$nbredepersonne)*$data['quantite_make']);

    echo "<p>".$data['nom_ingredients'].' : '.$quantite.' '.$data['unite_make'].'</p>';
    }
    echo"</div>";
    $onerecipe =  ob_get_clean();
    require_once('template.php');
 ?>