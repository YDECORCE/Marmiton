<?php
ob_start();
$id=$_GET['id'];
echo"<div class='container card py-5'>";

foreach ($recipedetail as $data)
    {
        $text=str_replace ("/*","</p><p>",$data['recette_recettes']);
        echo"<h2>".$data['nom_recettes']."</h2>
                <div class='image'>
                    <img src=".$data['image_recettes']." alt=".$data['nom_recettes']." class='fakeimg'>
                </div>
                <div class='row justify-content-around align-items-center inforecette'>
                        <p>Durée : ".$data['temps_recettes']."</p>
                        <p>Type : ".$data['type_recettes']."</p>
                        <p>Difficulté : ".$data['difficulte_recettes']."</p>
                        <p>Coût : ".$data['cout_recettes']."</p>
                </div>";
    $nbredepersonne=$data['nombre_personnes'];
    }
    echo"<div class='row w-100 m-0'>";
    
    if (isset($_GET['nbrpers'])){$nbrepersonneajust=$_GET['nbrpers'];}
        else {$nbrepersonneajust=$nbredepersonne;}

echo"<div class='col-12 col-sm-4 py-3 px-0 m-0 ingredient'>
        
        <form method='get' action='index.php' style='text-align:center; margin-bottom : 10px'>
            <input hidden name='action' value='detail'>
            <input hidden name='id' value=".$id.">
            <label for='nbrepers'>Nombre de Parts</label>
            <input type='range' name='nbrpers' value='".$nbrepersonneajust."' min='1' max='12' id='nbrepers' oninput='this.nextElementSibling.value = this.value'>
            <output>".$nbrepersonneajust."</output>
            <button type='submit' name='calcul' value='calc'>Calculer</button>
        </form>";

    foreach ($recipeingredient as $data)
    {
    $quantite=(($nbrepersonneajust/$nbredepersonne)*$data['quantite_make']);
    echo "<p>".$data['nom_ingredients'].' : '.$quantite.' '.$data['unite_make'].'</p>';
    }
    echo"</div><div class='col-12 col-sm-8 m-0'>
            <p>".$text."</p>
        </div>";
    echo"</div></div>";
    $onerecipe =  ob_get_clean();
    require_once('template.php');
 ?>