<?php
require_once('connexion.php');

class Ingredient extends Connexion
{
    function IngredientLetter()
    {
        $letters = $this->connect()->prepare('SELECT LEFT (`nom_ingredients`,1) AS letter FROM ingredients GROUP BY LEFT(`nom_ingredients`,1)');
        $letters->execute();
        $result = $letters->fetchAll();
        return $result;
    }

    function ShowIngredient($letter)
    {
        $srch=strtoupper($letter)."%";
        $ingredient= $this->connect()->prepare('SELECT * FROM `ingredients` WHERE `nom_ingredients` LIKE :letter ORDER BY `nom_ingredients`');
        $ingredient->bindParam(':letter', $srch, PDO::PARAM_STR);
        $ingredient->execute();
        $result = $ingredient->fetchAll();
        // echo $srch;
        // var_dump($result);
        // die;
        return $result;
    }
}