<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: colab.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            $_SESSION['username'] = $username;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: colab.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }      
    }
?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Login</title>
</head>
<body class="body">
    <form class="login-form" action="#" method="POST">
    <p class="login-text">PI Back End<br><br>
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
    </p>
    <input type="text" name="username" class="login-username" autofocus="true" required="true" placeholder="Username" />
    <input type="password" name="password" class="login-password" required="true" placeholder="Password" />
    <input type="submit" value="Login" class="login-submit" />
  </form>
  <a href="registro.php" class="login-forgot-pass">Nuevo usuario?</a>
  <div class="underlay-photo"></div>
  <div class="underlay-black"></div>
  </body>
</html>
