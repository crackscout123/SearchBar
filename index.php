<?php
  if(isset($_POST['args'])){
    $string = $_POST['args'];
?>
<DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  </head>
  <body>
    <div class="container">
      <form method="POST" src="index.php">
        <input type="text" placeholder="Search..." name="args" required>
        <input type="submit" hidden>
      </form>
    <?php
      echo 'Search query =' . $string;
    }
    ?>
    <div class="search"></div>
    </div>
  </body>
</html
