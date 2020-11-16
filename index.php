<?php
if (isset($_GET['action'])){
    echo 'on a une action';
}
else{
    include'vue/accueil.php';
}

?>