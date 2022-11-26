<?php
    session_start();
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
    <div>
        <p>
        <?php
        $nombre = $_FILES['archivo']['name'];
        $guardado = $_FILES['archivo']['tmp_name'];
        
        if(!file_exists('uploads/user1'))
        {
           mkdir('uploads/user1',0777,true);

           if(file_exists('archivos'))
           {
              if(move_uploaded_file($guardado, 'uploads/user1/' . $nombre))
              {
                echo "Guardado";
             }
             else
             {
                echo "Ha ocurrido un error.";
             }
           }
        }
        else
        {
           if(move_uploaded_file($guardado, 'uploads/user1/' . $nombre))
           {
                echo "Guardado";
           }
           else
           {
                echo "Ha ocurrido un error.";
             }
           }
        ?>
            <a class="button" href='colab.php?file=$filename'>Atras</a>
        </p>
    </div>
</body>
</html>