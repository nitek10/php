<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
	 <link href="fontawesome/css/all.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;#39;" stylesheet="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="ism/css/my-slider.css"/>
 <script src="ism/js/ism-2.2.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	 <script>
function myFunction() {
  document.getElementById("menu_oculto").style.display = "block";
}

$(function() {

  // elementos de la lista
  var menues = $(".menu_classic span a");

  // manejador de click sobre todos los elementos
  menues.click(function() {
     // eliminamos active de todos los elementos
     menues.removeClass("active");
     // activamos el elemento clicado.
     $(this).addClass("active");
  });

});


</script>







 </head>
<body>
	<div >
<div class="menu_oculto">

</div>

	<div class="header_index">
		<table class="header_table">
			<tr>
				<td style="width: 50%; text-align: right; padding-right: 15%;"><i class="fas fa-map-marker-alt"></i> Calle Labastida, 13, 28034 Madrid</td>
				<td style="float: left; display: contents;"><span><i class="fas fa-phone-alt"></i> 91 729 28 62 </span><span><i class="fas fa-envelope"></i> info@cesfuencarral.com</span><span><i class="fas fa-user-alt"></i> Login / Register</span></td>
			</tr>
		</table>
	</div>



<ul class="menu_classic">
	<li style="    margin-right: 8%;">
			<span class="logo">
				<img src="Logo1CES.png">
			</span>
</li>


				<li><span class=""><a href="#" class="">Inicio</a></span></li>

				<li><span><a href="#" class="">Ciclos</a></span></li>
				<!--mter un sub menu con grado medio y grado superior-->

				<li><span><a href="#" class="">Becas</a></span></li>

				<li><span><a href="#" class="">Conocenos</a></span></li>

			<li>	<span><a href="#" class="">Campo Virtual</a></span></li>

				<li><span><a href="#" class="">Contacto</a></span></li>
</ul>


	<div class='container'>

	<div class="ism-slider" id="my-slider">
	  <ol>
	    <li>
	      <img src="sliders/slider1.png">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	    <li>
	      <img src="sliders/slider2.png">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	    <li>
	      <img src="sliders/slider3.png">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	  </ol>
	</div>
	</div>

	<div class="servicios">
		<div class="container" id="menu_servicios">
			<h3>SERVICIOS</h3>
			<!--<div>
			<div>
				<h3 class="subh3">¿Quiénes Somos?</h3>
				<p>En nuestro centro ofrecemos una atención personalizada a cada alumno/a. Para nosotros lo más importante eres tú.</p>
			</div>
			<div>
				<h3 class="subh3">Nuestros Precios</h3>
				<p>Pincha aquí para conocer los precios de los Ciclos Formativos de Grado Superior</p>
			</div>
			<div>
				<h3 class="subh3">Seminarios</h3>
				<p>Para completar la formación de nuestro alumnado, contamos con seminarios formativos que se imparten en todos los cursos</p>
			</div>
		</div>-->
		<div class="tabla_servicios">
			<div class="fila1">
<div class="column">
	<div class="fila_servicios">
		<div class="icono">
					<img src="iconos/icono1.png" style="width:60px">
				</div>
	<h3 class="subh3">¿Quiénes Somos?</h3>
	<p>En nuestro centro ofrecemos una atención personalizada a cada alumno/a. Para nosotros lo más importante eres tú.</p>
</div>
</div>
<div class="column">
	<div class="fila_servicios">
		<div class="icono">
					<img src="iconos/icono2.png" style="width:60px">
				</div>
	<h3 class="subh3">Nuestros Precios</h3>
	<p>Pincha aquí para conocer los precios de los Ciclos Formativos de Grado Superior</p>
	</div>
</div>
<div class="column">
	<div class="fila_servicios">
		<div class="icono">
					<img src="iconos/icono3.png" style="width:60px">
				</div>
	<h3 class="subh3">Seminarios</h3>
	<p>Para completar la formación de nuestro alumnado, contamos con seminarios formativos que se imparten en todos los cursos</p>
	</div>
</div>
<div></div>
			</div>
		</table>
	</div>
		</div>
</div>
</body>
<footer>

</footer>
</html>
