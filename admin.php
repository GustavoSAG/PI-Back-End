<?php
    session_start();
    include("con_db.php");

    if(!isset($_SESSION['rol'])){
        header('location: index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: index.php');
        }
    }
?>
<?php 

if ($_GET)
{
    If (unlink(''.$_GET['file']))
    {
        Header('Location:admin.php');
    }
    else
    {
        Header('Location:admin.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="estilo.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Admin</title>
</head>
<body class='fondo_user'>
    <div class="container">
        <header class="perfil">
            <img class="perfil-foto" src="img/perfil.jpg" />
            <div class="titulo">
                <h1><?php echo $_SESSION['username']; ?></h1>
            </div>
        </header>
    </div>
    <div class="cont_gallery">
        <a class="btn-logout" href="logout.php">Salir</a>
        
        <h2 class="txt_1">Imagenes</h2>
        <div class="gallery">
            <?php
            foreach (glob("uploads/user1/*.*") as $filename)
                {
                    echo "
                    <div class='shadow'>
                    <a class='delete' href='delete.php?file=$filename'>Eliminar</a>
                    <br>
                    <img src='$filename'>
                    </div>";
                }
            ?>
            <?php
            foreach (glob("uploads/user2/*.*") as $filename)
                {
                    echo "
                    <div class='shadow'>
                    <a class='delete' href=#?file=$filename'>Eliminar</a>
                    <br>
                    <img src='$filename'>
                    </div>";
                }
            ?>
        </div>
</body>
</html>



  
