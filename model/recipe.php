<?php
require_once('connexion.php');

class Recipe extends Connexion
{

function allrecipes()
    {
        $recipes = $this->connect()->prepare('SELECT * FROM recettes');
        $recipes->execute();
        $result = $recipes->fetchAll();
        return $result;
    }
public function randomrecipe($type)
    {
        $recipes = $this->connect()->prepare('SELECT * FROM recettes WHERE type_recettes= :plat order by rand() LIMIT 1' );
        $recipes->bindParam(':plat', $type, PDO::PARAM_STR);
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
        $srch=trim($search);
        $array=explode(' ',$srch);
        // $srch="%".strtoupper(addcslashes($search,'_'))."%";
        $sql="SELECT * FROM recettes
        WHERE recettes.nom_recettes LIKE \"%$array[0]%\" ";
        for ($i=1;$i<count($array);$i++)
            {
            $sql.="AND recettes.nom_recettes LIKE \"%$array[$i]%\" ";
            }
        $req = $this->connect()->prepare($sql);
        // $req->bindParam(':search', $srch, PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetchAll();
        return $result; 
    }
function SearchRecipesbyIngredient($ingredient)
    {
        $req = $this->connect()->prepare('SELECT * FROM recettes
        INNER join make on recettes.id_recettes=make.id_recettes
        inner join ingredients on make.id_ingredients=ingredients.id_ingredients
        where ingredients.id_ingredients=:id');
        $req->bindParam(':id', $ingredient, PDO::PARAM_INT);
        $req->execute();
        $result = $req->fetchAll();
        return $result; 
    }
}   
?>
