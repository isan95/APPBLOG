<!DOCTYPE html>
<html>
<head>
	<title> ::: BLOG ::::</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>/recursos/css/bootstrap.min.css">	  
    <script src="<?php echo $url;?>/recursos/js/jquery.min.js"></script>
    <script src="<?php echo $url;?>/recursos/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>	
      <a class="navbar-brand" href="#">BLOG</a>
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="/APPBLOG">Inicio</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="?controlador=usuario&accion=frmRUsuario"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        
        <?php if(isset($_SESSION["ID"])){  ?>
          <?php if ($_SESSION['ROL'] == 1){?>
               <li><a href="?controlador=categoria&accion=index"><span class="glyphicon glyphicon-user"></span>
                Categoria </a></li>
           <?php } ?>     
              <li><a href="?controlador=usuario&accion=frmEUsuario"><span class="glyphicon glyphicon-user"></span>
                Editar Perfil </a></li>

              <li><a href="?controlador=usuario&accion=cerrarSession"><span class="glyphicon glyphicon-log-in"></span>
                <?php echo $_SESSION['NICK'];?> - Cerrar </a></li>
        <?php }else{ ?>  
	        <li><a href="?controlador=usuario&accion=frmISUsuario"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
        <?php } ?>


	    </ul>
	</div>   
  </div>
</nav>

  <div class="container">  
    <div class="jumbotron">
      <h1>BLOG de programación</h1> 
      <p>HTML, CSS y JS para el desarrollo de proyectos receptivos y móviles en la web.</p> 
    </div>  
     <?php require_once "rutas.php"; ?>

   </div><!-- contenedor -->
 <hr />
<footer class="container-fluid text-center">
  <p>BLOG 2018</p>
</footer>

</body>
</html>