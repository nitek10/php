<!DOCTYPE html>
<html>
<head>
	<title></title>
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



	<div class="menu_classic">
		<div class="logo">
			<span>
				<img src="Logo1CES.png">
			</span>
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


	<div class='container'>

	<div class="ism-slider" id="my-slider">
	  <ol>
	    <li>
	      <img src="ism/image/slides/flower-729514_1280.jpg">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	    <li>
	      <img src="ism/image/slides/beautiful-701678_1280.jpg">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	    <li>
	      <img src="ism/image/slides/summer-192179_1280.jpg">
	      <div class="ism-caption ism-caption-1" >My slide caption text</div>
	    </li>
	  </ol>
	</div>
	</div>
</body>

</html>
