<!-- erreur 2002 le serveur n'as pas les ressource necessaire-->

<?php

echo $_SERVER['REQUEST_URI']."<br/>";
$tab = array();
$tab2 = array();
$string = $_SERVER['REQUEST_URI'];
$string = explode("?", $string);
array_push($tab, $string[1]);
$stringToWork = implode(",", $tab);
echo $stringToWork;
$tabs = explode("&", $stringToWork, 3);
echo "<form method='get' action='/' >";
for ($i=0; $i<2; $i++){
$value = explode("=", $tabs[$i]);
echo "<input type='text' value='".$value[1]."' name='". $value[0]."'>";

}
echo "<input type ='number' name ='nbpersonne' value=''>";
echo "<input type='submit'>";
echo "</form>";