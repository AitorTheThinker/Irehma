<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/gallery.css">
  <link rel="icon" href="../img/logos/Irehma.png" type="image/gif" sizes="16x16">
  <title>IREHMA</title>
</head>
<body>
<div class="inside-top-bar grid-container grid-parent"><aside class="widget_text widget inner-padding widget_custom_html">
    <div class="firstRow"><p>¿Piensas hacer una reforma en tu comunidad? <strong>Llama ahora al <a href="tel:+34654111201" rel="nofollow">654111201</a> o <a href="./contacto/form_particular.html" rel="nofollow">contacta</a></div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light "> 
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html"> <img class="logo" src="../img/logos/blanco.png">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.html">Irehma</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.html#sobre_nosotros">¿Quiénes somos?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./mostrar_reformas.php">Reformas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./mostrar_proyectos.php">Proyectos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./otros_servicios.php">Otros Servicios</a>
              </li>
              <!-- Presupuesto para Particulares y Empresas-->
                <li class="nav-item">
                        <a class="nav-link" href="../contacto/form_particular.html">Contacto</a>
                </li>
            </ul>
            <ul class="navbarIcons me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="social-icon" href="https://www.instagram.com/irehmadrid/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li class="nav-item"><a class="social-icon" href="https://www.facebook.com/Irehma-104627448911974" target="_blank"><ion-icon name="logo-facebook" ></ion-icon></a></li>
              <li class="nav-item"><a class="social-icon" href="https://twitter.com/irehmamadrid" target="_blank"><ion-icon name="logo-twitter" ></ion-icon></a></li>
              <li class="nav-item"><a class="social-icon" href="https://www.youtube.com/channel/UCGFSYqJb2E5k2j1EgTfAUoQ" target="_blank" ><ion-icon name="logo-youtube"></ion-icon></a></li>
            </ul>
          </div>
        </div>
      </nav>
<!-- partial:index.partial.html -->
<section id="gallery">
<div class="tituloGaleria">
<h1>Galería de Reformas</h1>
<img src="../img/logos/tools-312334.svg" alt="ReformasLogo" id="LogoMartillo">
</div>
  <div class="container">
    <div id="image-gallery">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='39worker_6586718_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='11construction-2578410_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='12construction-6475766_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='13construction-site-3562156_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='14craftsmen-19584_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='24housebuilding_3370969_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='28men-7031828_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='40housebuilding_1407462_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='41renovations-738030_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='44contruction-1998232_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='42architect-3979490_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='43building-1510561_1920.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='30rc29 B.JPG';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='46construction-worker.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='47laying-ceramic-tiles-trowelingr-.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
          <?php  require_once('conexion.php');
	      if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		    mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			$consulta="SELECT nombre FROM fotos WHERE nombre='25mas.jpg';";
			$resultado=mysqli_query($conexion, $consulta);
			while($dato=mysqli_fetch_array($resultado)){
				echo "<img src='../img/reformas/$dato[nombre]' class='img-responsive'>";
			} 	
		}
	mysqli_close($conexion);
	}
	/*FIN QUERY*/
	?>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div><!-- End row -->
    </div><!-- End image gallery -->
  </div><!-- End container --> 
</section>
<br>
<!-- INICIO DEL FOOTER-->
<br>
<footer class="fondo_footer">
  <div class="footer-top">
      <div class="container">
          <div class="row gy-4">
              <div class="col-lg-4">
                <img src="../img/logos/irehma footer.png" alt="irehma_footer" class="footerIrehma">
              </div>
              <div class="col-lg-2">
                  <h5 class="text-black">Irehma</h5>
                  <ul class="list-unstyled">
                      <li><a href="../index.html#sobre_nosotros">Sobre nosotros</a></li>
                      <li><a href="../BBDD/otros_servicios.php">Servicios</a></li>
                      <li><a href="../contacto/form_particular.html">Presupuesto</a></li>
                  </ul>
              </div>
              <div class="col-lg-2">
                  <h5 class="text-black">Más</h5>
                  <ul class="list-unstyled">
                      <li><a href="../FAQ's/faqs.html">FAQ's</a></li>
                  </ul>
              </div>
              <div class="col-lg-4" id="contacta">
                  <h5 class="text-black">Contacto</h5>
                  <ul class="list-unstyled">
                      <li>Dirección: Pasaje las castellanas 1070 28830 San Fernando de Henares, Madrid</li>
                      <li>Correo: info@irehma.es</li>
                      <li>Teléfono: 654111201</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-bottom py-3">
      <div class="container">
          <div class="row1">
              <div class="col-md-6">
               
                  <p class="mb-0">© 2022 copyright all right reserved | Designed by Aitor Mendoza 
              </div>
          </div>
      </div>
  </div>
</footer>
<!--Icons-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--Icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="../js/js.js"></script>

</body>
</html>
