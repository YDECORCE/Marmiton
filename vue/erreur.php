<?php
ob_start();

echo "<h2>On dirait qu'il n'y a pas de résultat à votre recherche</h2>";

$searcherror=ob_get_clean();
require ('template.php');
?>