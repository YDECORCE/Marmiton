<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Chef Cuisine</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link href="public/css/style.css" rel="stylesheet" /> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Homenaje&display=swap" rel="stylesheet">


    </head>
     
   
 
</style> 
</head>

<body>
<header>


<div class="header">
<video autoplay loop muted><source src="public/img/Food.mp4" type="video/mp4"style=width:500vw;> </video>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-light bg-dark ">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img src="public/img/chef.png" width="50" height="60" alt=""></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nos Recettes </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Recherche par ingrédient</a>
      </li>

     
    </ul>
    <!-- Links -->

    <form method="GET" class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2"  name="text"   placeholder="Search" aria-label="Search">
       <button class="btn"  type="submit" name="action"  value="rechercher" > </button>
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>


</header>
 
</div>
 

<div class="row">
<?php
    if(!empty($loopfiverecipes)){echo $loopfiverecipes;}
    if(!empty($onerecipe)){echo $onerecipe;}
    if(!empty($searchrecipe)){echo$searchrecipe;}
    // if(!empty($cequilfautafficher)){echo $cequilfautafficher;}
    ?>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>