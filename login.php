<?php

session_start();

$db_data = json_decode(file_get_contents("db.json"));

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	foreach ($db_data as $data) {
		if($data->username == $_POST["u_name"] && $data->password == $_POST["u_pass"]){
			$_SESSION["username"] = $_POST["u_name"];
			header("Location: welcome.php");
		}
	}

	$message = "Wrong Credentials!!";
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="login.php" method="post">
      <fieldset>
        <legend>Login</legend>
        <label for="u_name">Username: </label>
        <input type="text" name="u_name" value="" required><br>
        <label for="u_pass">Password: </label>
        <input type="password" name="u_pass" value="" required><br>
        <button type="submit" name="login">Login</button>
		<span style="color:red"><?php echo $message; ?></span>
      </fieldset>
    </form>
  </body>
</html>
