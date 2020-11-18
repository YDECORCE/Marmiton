<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
        <title>Chef Cuisine</title>
        <link href="public/css/style.css" rel="stylesheet" /> 
    </head>

</head>
<body>

<div class="header">
  <h2>Chef Cuisine</h2>
</div>
 

<div class="row">
<?php
    if(!empty($loopfiverecipes)){echo $loopfiverecipes;}
    ?>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>