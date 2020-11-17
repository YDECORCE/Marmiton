<?php
abstract class Connexion
{
    protected function connect()
        {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=marmiton;port=3306;charset=utf8', 'root', '');
            return $bdd;
         
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        }
    private function refresh($url)
        {
        echo '<script language="Javascript">
        document.location.replace("'.$url.'");
        </script>';
        }
}