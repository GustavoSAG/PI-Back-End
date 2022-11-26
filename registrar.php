<?php 

include("con_db.php");
session_start();

if (isset($_POST['register'])) {
    if (strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1) {
	    $username = trim($_POST['username']);
	    $password = trim($_POST['password']);
	    $consulta = "INSERT INTO usuarios(id,username,password,rol_id) VALUES ('','$username','$password','2')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	header('location: colab.php');
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>