<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a galería de bootstrap  --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/js.js"></script>
    <link rel="icon" href="../img/logos/Irehma.png" type="image/gif" sizes="16x16">
    <title>IREHMA</title>
</head>
<body>  
<div class="inside-top-bar grid-container grid-parent" style="background-color: #DD9A00"><aside id="custom_html-2" class="widget_text widget inner-padding widget_custom_html">
    <div class="textwidget custom-html-widget"><p style="text-align:center">¿Piensas hacer una reforma en tu comunidad? <strong>Llama ahora al <a href="tel:+34654111201" rel="nofollow">654111201</a> o <a href="./contacto/form_particular.html" rel="nofollow">contacta</a></div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light " style="background-color: #F7F0F0;"> 
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
                <a class="nav-link" href="#sobre_nosotros">¿Quiénes somos?</a>
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
          </div>
        </div>
      </nav>
<!--Fin del Hero -->
<h1 class="text-center">Galería de Reformas</h1>
<section class="container_galeria">
<div class="row">
  <div class="col-lg-4"> <!-- 1reforma-->
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='1_fachada.jpg';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
  <div class="col-lg-4">  <!-- 2daforma-->
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='2_columnas.JPG';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
  <div class="col-lg-4"> <!-- 3raforma-->
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='3_fachada.png';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
  <div class="col-lg-4"> <!-- 4taforma-->
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='4cubierta.png';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
  <div class="col-lg-4">
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='5medallon.JPG';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
  <div class="col-lg-4">
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='6restauracion.JPG';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <?php
	// <?php levanta interprete de php.

	/* Conectar archivo conexion a este archivo. (include('conexion_agenda.php')---Para conectar y si dar error sigue la ejecucion del programa.)*/
	require_once('conexion.php');
	// echo sirve para mostrar info por pantalla.
	// 1.- Conexion.
	if($conexion=mysqli_connect($servidor, $usuario, $password, $bbdd)){
		// Entramos por aqui...
		mysqli_query($conexion, "SET NAMES 'UTF8'");
        if(mysqli_select_db($conexion, $bbdd)){
			// 3.- Definimos la query.
			$consulta="SELECT nombre FROM fotos WHERE nombre='2_columnas.JPG';";
			// 4.- Ejecutar la query.
			$resultado=mysqli_query($conexion, $consulta);
			// 5.- Comprobar.
			//Si hay algun error, lo muestro en caso contrario continuo con el WHILE.
			if(mysqli_errno($conexion)!=0){
				//Quiere decir que hay un error.
				echo "<p>No error: ".mysqli_errno($conexion)."</p>";
				echo "<p>Mensaje error: ".mysqli_error($conexion)."</p>";
			} else{
				//Quiere decir que no hay error.
			}
			// 6.- Mostrar datos por pantalla (Si es un query SELECT)

			while($dato=mysqli_fetch_array($resultado)){
				//echo "<p class='negrita'>".$dato["nombre"]." ".$dato["apellidos"]."</p>";

				echo "<img src='../img/reformas/$dato[nombre]' class='reformas'>";
			} 	
		}
	// 7.- Cerramos la conexion.
	mysqli_close($conexion);
	}
	/* ?> cierra el interprete.*/
	?>
  </div>
</div>


</section>

  <!--Fin del contenedor-->
</div>
<!-- INICIO DEL FOOTER-->
<footer>
  <div class="footer-top">
      <div class="container">
          <div class="row gy-4">
              <div class="col-lg-4">
                  <img class="logo" src="#" alt="">
              </div>
              <div class="col-lg-2">
                  <h5 class="text-black">Marca</h5>
                  <ul class="list-unstyled">
                      <li><a href="#sobre_nosotros">Sobre nosotros</a></li>
                      <li><a href="#">Servicios</a></li>
                      <li><a href="#">Presupuesto</a></li>
                  </ul>
              </div>
              <div class="col-lg-2">
                  <h5 class="text-black">Más</h5>
                  <ul class="list-unstyled">
                      <li><a href="#">FAQ's</a></li>
                      <li><a href="#">Política de privacidad </a></li>
                      <li><a href="#">Shipment</a></li>
                  </ul>
              </div>
              <div class="col-lg-4" id="contacta">
                  <h5 class="text-black">Contact</h5>
                  <ul class="list-unstyled">
                      <li>Dirección: Pasaje las castellanas 1070</li>
                      <li>Correo: irehma@gmail.com</li>
                      <li>Teléfono: 676152810</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-bottom py-3">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <p class="mb-0">© 2022 copyright all right reserved | Designed by Aitor Mendoza <i
                      class="bx bx-heart text-danger"></i>
              </div>
          </div>
      </div>
  </div>
</footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="js/app.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
</body>
</html>



