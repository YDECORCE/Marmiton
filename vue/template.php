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
    
    if((date('H')>=13)&&(date('H')<=23)) {$logo="A l'ardoise, ce soir...";}else{$logo="A l'ardoise, ce midi...";}
    
  ?>
<header>
       <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="row logo w-100">
        <!-- Navbar brand -->
            <a class="navbar-brand mt-5 ml-5" href="index.php"><h1><?php echo $logo; ?></h1></a>
        </div>
        <div class="row w-100 menu">
        <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon"> <img src="public/img/menu.png" width="50" height="50" alt=""></span>
            </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse menu w-100 " id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav w-50" style="justify-content:space-between">
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=all">Nos Recettes
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=searchingredient">Recherche par ingrédient</a>
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
    if(!empty($letteringredient)){echo $letteringredient;}
    
    ?>
<!-- Footer -->
<footer class="page-footer font-small ">

<!-- Footer Links -->

  <div class="container-fluid text-center text-md-left py-3">

    <!-- Grid row -->
    <div class="row text-center" style="align-items:flex-end">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto ringo">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Chef Cuisine</h5>
            <img src="public/img/chef.png" height="160px" alt="">
      </div>
      <div class="col-md-4 col-lg-6 px-auto" >
          <div class="footer-copyright text-center py-3">© 2020 Copyright: Chef Cuisine.com</div>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CATÉGORIES</h5>

        <ul class="list-unstyled">
          <li>
            <a href="index.php?action=all">Nos recettes</a>
          </li>
          <li>
            <a href="index.php?action=searchingredient">Recherche par ingrédient</a>
          </li>
          </ul>

      </div>
    </div>
    </div>
  
</footer>
<!-- Footer -->
</body>

</html>