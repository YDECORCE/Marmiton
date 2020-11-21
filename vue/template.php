<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link href="public/css/style.css" rel="stylesheet" />
  <title>A l'ardoise</title>
</head>
<body>
  <?php
    
    if((date('H')>13)&&(date('H')<=23)) {$logo="A l'ardoise, ce soir...";}else{$logo="A l'ardoise, ce midi...";}
    
  ?>
<header>
       <!--Navbar-->
      <nav class="navbar navbar-expand-lg">

        <!-- Navbar brand -->
        <a class="navbar-brand mt-5" href="index.php"><h1><?php echo $logo; ?></h1></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse menu w-100 d-flex justify-content-between" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav d-flex justify-content-between" style="width:50%">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li> -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php?action=all">Nos Recettes
              <span class="sr-only">(current)</span>
             </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recherche par ingrédient</a>
            </li>
          </ul>
          <!-- Links -->

          <form method="GET" class="form-inline">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Rechercher une recette"  name="text" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-light" type="submit" name="action" value="rechercher" id="button-addon2">valider</button>
                  </div>
               </div>
          </form>
        </div>
      </nav>

        <!-- Collapsible content -->
       
</header>
<?php
    if(!empty($loopfiverecipes)){echo $loopfiverecipes;}
    if(!empty($loopallrecipes)){echo $loopallrecipes;}
    if(!empty($onerecipe)){echo $onerecipe;}
    if(!empty($searchrecipe)){echo $searchrecipe;}
    if(!empty($searcherror)){echo $searcherror;}
    
    
    ?>
<div class="footer">
          <h2>Footer</h2>
        </div>
</body>

</html>