<!DOCTYPE html>
<html class="html">
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="body">
    <form class="login-form"method="POST">
    <p class="login-text">New User</p><br>
    <input type="text" name="username" class="login-username" autofocus="true" required="true" placeholder="Username" />
    <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
    <input type="submit" name="register"  class="login-submit" />
  </form>
  <?php
        include("registrar.php");
  ?>
  <a href="index.php" class="login-forgot-pass">Login</a>
  <div class="underlay-photo"></div>
  <div class="underlay-black"></div> 
</body>
</html>