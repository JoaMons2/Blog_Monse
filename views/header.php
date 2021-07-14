<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1">
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Blog Monse TIC</title>

</head>
<body>
    <header>
      <div class="contenedor">
        <div class="logo izquierda">
          <p><a href="<?php echo RUTA; ?>">Mi Primer Blog</a></p>
        </div>

        <div class="derecha">
          <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
            <input type="text" name="busqueda" placeholder="Buscar">
            <button type="submit" class="icono fa fa-search"></button>
          </form>

          <nav class="menu">
             <ul>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
             </ul>
          </nav>
        </div>
      </div>
    </header>