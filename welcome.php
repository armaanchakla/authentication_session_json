<?php
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: login.php");
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
