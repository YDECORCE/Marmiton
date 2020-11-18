<?php
require_once('connexion.php');

class Recipe extends Connexion
{

function allrecipes()
    {
        $recipes = $this->connect()->prepare('SELECT * FROM recettes' );
        $recipes->execute();
        $result = $recipes->fetchAll();
        return $result;
    }
function random()
    {
    $recipes = $this->connect()->prepare('SELECT * FROM recettes WHERE id_recettes order by rand() LIMIT 5' );
    $recipes->execute();
    $result = $recipes->fetchAll();
    return $result;
    }
function detailonerecipe($id)
    {
        $req = $this->connect()->prepare('SELECT * FROM recettes WHERE recettes.id_recettes=:id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $result = $req->fetchAll();
        return $result; 
        
    }
function onerecipeingredient($id)
    {
        $recipes = $this->connect()->prepare('SELECT `nom_ingredients`,`quantite_make`,`unite_make` FROM ingredients
        INNER join make on ingredients.id_ingredients=make.id_ingredients
        inner join recettes on make.id_recettes=recettes.id_recettes
        where recettes.id_recettes=:id');
        $recipes->bindParam(':id', $id, PDO::PARAM_INT);
        $recipes->execute();
        $result = $recipes->fetchAll();
        return $result;   
    }
function searchrecipes($search)
    {
    $srch="%".strtoupper(addcslashes($search,'_'))."%";
    $req = $this->connect()->prepare('SELECT * FROM recettes WHERE recettes.nom_recettes LIKE :search');
    $req->bindParam(':search', $srch, PDO::PARAM_STR);
    $req->execute();
    $result = $req->fetchAll();
    return $result; 
    }
}


?>