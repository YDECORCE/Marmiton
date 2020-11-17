<?php
require_once('connexion.php');

class Recipe extends Connexion
{
public function allrecipes()
    {
        $recipes = $this->connect()->prepare('SELECT * FROM recettes');
        $recipes->execute();
        $result = $recipes->fetchAll();
        return $result;
    }
public function random()
    {
    $recipes = $this->connect()->prepare('SELECT * FROM recettes WHERE id_recettes order by rand() LIMIT 5' );
    $recipes->execute();
    $result = $recipes->fetchAll();
    return $result;
    }
}


?>
