<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-image: url('fond.jpg');
    background-size: cover;
    
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
  }
   header {
      background-color: #FF69B4;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    header .brand-logo {
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
    }

    .nav-wrapper a {
      color: #fff;
    }

    .sidenav a {
      color: #000;
    }


    </style>
            
    </head>

   <body>
    <header>
    <div class="brand-logo"></div>
    <p> Moda de lujo y el estilo unico</p>
  </header>

  
  <nav>
    <div class="nav-wrapper black">
      <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
      <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
      
      </div>
       <div class="row">
                <div class="col s12 m12 l12">
      <img src="ts.jpg" style="width:100%; height:200px">
    </div>
      </div>
      
    </div></li>
    <li><a href="index.html" class="pink-text">Registrar  /  Iniciar seción</a></li>
     <li><div class="divider"></div></li>
        <li><a href="Proyect.php" class="pink-text">Inicio</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Coleccion.php" class="pink-text">Colección</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Contacto.php" class="pink-text">Contacto</a></li>
         <li><div class="divider"></div></li>
         <li><a href="Comentario.php" class="pink-text">Comentario</a></li>
         <li><div class="divider"></div></li>
         <li><a href="otrosCom.php" class="pink-text">Otros Comentarios</a></li>
         <li><div class="divider"></div></li>
        <li><a href="Credencial.php" class="pink-text">Credencial</a></li>
         <li><div class="divider"></div></li>
        <li><a href="nivel1.html" class="pink-text">Juego</a></li>
         <li><div class="divider"></div></li>
         <li><a href="pedidos.php" class="pink-text">Compras de Usuarios</a></li>
         <li><div class="divider"></div></li>
          <li><a href="general.php" class="pink-text">Más..</a></li>
         <li><div class="divider"></div></li>

      </ul>
    </div>
  </nav>

    <div class="container">
  <center> 
    <i><font color="white"><h1>Comentarios de usuarios</h1></font></i>
<table class="striped"> 

  <tr>
    <thead>
    <th>Nombre Usuario</th>
    <th>id Articulo</th>
    <th>Categoria</th>
    <th>Comentario</th>
  
  </thead>
  </tr>
  <?php
  include("ConeC.php");
  $query="SELECT comp2.nombre,comp2.idarticulo,comp2.categoria,comentario.coment FROM comp2 LEFT JOIN comentario ON comp2.idcliente=comentario.idcliente";
  $resultado=$conexion->query($query);
  while($row=$resultado->fetch_assoc()){
    ?>
    <tbody>
    <tr>
      <td><?php echo $row['nombre'];?></td>
      <td><?php echo $row['idarticulo'];?></td>
      <td><?php echo $row['categoria'];?></td>
      <td><?php echo $row['coment'];?></td>
      
    </tr>
    </tbody>
    <?php

  }
  ?>
</div>
</center>
</table>

    

<script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });
  </script>
    </body>
  </html>