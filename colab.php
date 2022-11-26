<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: index.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: index.php');
        }
    }
?>
<?php 
if ($_GET)
{
    If (unlink(''.$_GET['file']))
    {
        Header('Location:colab.php');
    }
    else
    {
        Header('Location:colab.php');
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
    <title>User</title>
</head>
<body class='fondo_user'>
    <div class="container">
        <header class="perfil">
            <img class="perfil-foto" src="img/perfil.png" />
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
                    <a class='delete' href='#?file=$filename'>Eliminar</a>
                    <br>
                    <img src='$filename'>
                    </div>";
                }
            ?>
        </div>
        <div class="txt_2">
            <p class="txt_1">Nueva Imagen</p>
            <form method="POST" action="upload.php" enctype="multipart/form-data">
                <input type="file" name="archivo" class="subir">
                <button type="submit" name="upload" class="button">Subir</button>
            </form>
        </div>
    </div>
</body>
</html>