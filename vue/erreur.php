<?php
ob_start();

echo "<div class='container pt-5' style='min-height:60vh'>
<h2>On dirait qu'il n'y a pas de résultat à votre recherche</h2>
<div class='row w-100 mt-5 justify-content-center'>
<a href='index.php' style='color:white'>Retour</a>
</div></div>";

$searcherror=ob_get_clean();
require ('template.php');
?>