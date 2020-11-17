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

  <div class="leftcolumn">
    <!-- première éponge -->
    <?php
    if(!empty($loopfiverecipes)){echo $loopfiverecipes;}
    ?>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>