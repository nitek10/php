<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
	 <link href="fontawesome/css/all.css" rel="stylesheet">

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

	<div class="header__nav" style="display:none;">
			<table><tr style="display: flex;">
				<td><a href="https://www.brookhousetraining.com/courses/">Courses</a><i class="toggle-sub-menu"></i>
<!--<ul class=>
	<li><a href=>Gas</a></li>
	<li><a href=>Pl</a></li>
	<li><a href=>AC</a></li>
	<li >Ap</a></li>
</ul>-->
</td>
<td><a href="">4 Steps</a></td>
<td><a href="">Why Us</a></td>
<td><a href="">Open Days</a></td>
<td><a href="">Calendar</a></td>
<td><a href="">Contact</a></td>
<td>
	<main>

	 <div class="col">
	    <div class="con">
	      <div class="bar top"></div>
	      <div class="bar middle"></div>
	      <div class="bar bottom"></div>
	    </div>
	  </div>
	</main>
</td>
</tr></table>
</div>

	<div class="menu_classic">
		<div>
			<!-- Imagen y texto-->
		</div>
		<div>
			<span class=""><a href="#" class="">Inicio</a></span>
		</div>
		<div>
			<span><a href="#" class="">Ciclos</a></span>
				<!--mter un sub menu con grado medio y grado superior-->
		</div>
		<div>
			<span><a href="#" class="">Becas</a></span>
		</div>
		<div>
			<span><a href="#" class="">Conocenos</a></span>
		</div>
		<div>
			<span><a href="#" class="">Campo Virtual</a></span>
		</div>
		<div>
			<span><a href="#" class="">Contacto</a></span>
		</div>
	</div>

</body>
</html>
