<?php
require_one('connexion.php');

class Recipe extends Connexion
{
    function rondom(){

    
    $a = 5;
    $bdd= mysql_query("SELECT * FROM recettes ORDER BY rand() LIMIT $a");
    while ($row = mysql_fetch_array($requete))   {
      
    }
}
}

?>
