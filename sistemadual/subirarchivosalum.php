<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Perfil</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="fonts.css"/>
        <link rel="stylesheet" type="text/css" href="inicio.css"/>
    </head>
    <body background="img/fondotesi.png" class="grid-container">
             <header class="header">
                <nav class="menu">
                    <ul>
                    <li><a href="inicio.php">inicio</a></li>
                    <li><a href="">visualiza manual</a></li>
                    <li><a href="">descarga archivos</a></li>
                    <li><a href="subirarchivosalum.php">subir archivos</a></li>
                    <li><a href="">visualiza su proceso</a></li>
                    <li><a href="">visualiza su calificacion</a></li>
                </ul>
            </nav>
            </header>
            
             <form method="POST" action="upload.php" enctype="multipart/form-data">
             <div>
             <span>BUSCAR ARCHIVO:</span>
             <input type="file" name="uploadedFile" />
             </div>
            <input type="submit" name="uploadBtn" value="SUBIR" />
                        
    </body>
</html>