<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
if(!$enlace){
    echo"Error en la conexión con el servidor";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portafolio MichBox</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--title-icon--------->
<link rel="shortcut icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--using FontAwesome---------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
	<!--Principal------------------------>
	<section id="main">
	<!--Navegación-------------------------------->
	<nav>
	<!--Logo--->
	<a href="#" class="logo">MichBox</a>
	<!--Menu--------->
	<div class="toggle"></div>
	<ul class="menu">
	<li class="active"><a href="#main" >Inicio</a></li>	
	<li><a href="#about">Sobre mí</a></li>	
	<li><a href="#services">Servicios</a></li>	
	<li><a href="#portfolio">Portafolio</a></li>		
	<li><a href="#contact-form">Contactame</a></li>	
	</ul>
	<!--language-->
	<a href="#" class="lang">Es</a>
	</nav>
	<!--Nombre--------------------------->
	<div class="name">
	<!--Hola------->
	<p>Hola</p>
	<!--Nombres--->
	<h1>Somos <font color="#63D9FF">MichBox</font> soluciones para ti...</h1>
	<!--detalles--------------->
	<p class="details">Somos desarrolladores freelance, 
		que tenemos un canal en youtube para dar a conocer parte mi contenido y nuestra profesión, 
		para asi tener un portafolio amplio de todas las creaciones en las que se encuentre el Desarrollo en general, 
		Juegos, Apps, Web, Movil etc...</p>
	<!--cv botton-------------------->
	<a href="#" class="cv-btn">Clic aquí </a>
	</div>
		<!--flecha hacia abajo-------------->
	<div class="black-line" ></div>
	<!--social---------------->
	<div class="social">
	<a href="https://www.facebook.com/Michbox2020" target="_blank"><i class="fab fa-facebook-f"></i></a>	
	<a href="https://www.instagram.com/michamos/"  target="_blank"><i class="fab fa-instagram"></i></a>
	<a href="https://www.youtube.com/channel/UCvtv-JBx4F5961uB8gUOJqQ"  target="_blank"><i class="fab fa-youtube"></i></a>	
	</div>
	
	</section>
	<!--sobre----------------------->
		<section id="about">
	<!--text---------------------->
	<div class="about-text">
	<h1>Sobre mí</h1>
	<h2>FreeLancing FrontEnd Developer</h2>
	<p>Soy un desarrollador web, apasionado por la innovación de los negocios en donde se tenga la capacidad a través de un clic para obtener mayores ganancias, me enfoco sobretodo en crear tus ideas en realidad y poderte brindar confianza en los servicios proporcionados</p>
	<button>Ver mas detalles</button>
	</div>
	<!--acerca-model----------------->
	<div class="about-model">
	<img src="images/about-model.png" alt="model"/>	
	</div>
	
	
	</section>
	<!--servicios-------------------->
	<section id="services">
	<!--heading-------------->
	<div class="s-heading">
	<h1>Servicios</h1>
	<p>Estos son algunos de los servicios que brindo.</p>
	</div>
	<!--servicios-box-container--------->
	<div class="b-container">
	<!--box-1---------------->
	<div class="s-box">
	<!--img------------->
	<div class="s-b-img">
		<!--type----------->
		<div class="s-type">Red Neuronal</div>
        <iframe width="350 px" height="300 em" src="Mi%20video.mp4" frameborder="100" allow="accelerometer; autoplay="no",encrypted-media; gyroscope;picture-in picture" ></iframe>
	</div>
	<!--text----------------->
	<div class="s-b-text">
	<a href="#">Se ofrece el servicio de red neuronal, en donde se podrá hacer un deepfake, con el fin de inclusive usarlo para un video-clip</a>	
	</div>
	</div>
		<!--box-2---------------->
	<div class="s-box">
	<!--img------------->
	<div class="s-b-img">
	<!--type----------->
		<div class="s-type">Web Desing</div>
		<!--name------->
		<img src="images/s3.jpg">
	</div>
	<!--text----------------->
	<div class="s-b-text">
	<a href="http://michbox1.tonohost.com/proyecto.html"  target="_blank">Se ofrece diferentes diseños para paginas Web con Html, Css, JavaScript, ademas de ser paginas responsive. <br> <black>Clic aquí</black></a>	
	</div>
	</div>
		<!--box-3---------------->
	<div class="s-box">
	<!--img------------->
	<div class="s-b-img">
		<!--type----------->
		<div class="s-type">Blender</div>
		<!--name------->
		<img src="images/s2.png">
	</div>
	<!--text----------------->
	<div class="s-b-text">
		
	<a href="#">Ofrezco el servicio de crear modelados 3D y Animación con Blender, ademas de la creación de Assents para motores de video juegos</a>	
	</div>
	</div>
	</div>
	</section>
	<!--portfolio------------------->
	<section id="portfolio">
	<!--heading----------->
	<h1 class="p-headind">Portafolio</h1>
	<!--portfolio-container------------>
	<div class="p-container">
	<!--portfolio-box-1-------->
	<div class="p-box">
	<!--text--------->
	<div class="overlay-text">
	<h1>3D Person</h1>
	<p>Unreal Enguie</p>	
	</div>
	<!--bg-img------------->
	<img src="images/w1.jpg">
		
	</div>
	<!--portfolio-box-2-------->
	<div class="p-box">
		<!--text--------->
	<div class="overlay-text">
	<h1>Stage Desing</h1>
	<p>Unity</p>	
	</div>
	<!--bg-img------------->
	<img src="images/w2.jpg">
	</div>
	<!--portfolio-box-3-------->
	<div class="p-box">
	<!--text--------->
	<div class="overlay-text">
	<h1>Level Desing</h1>
	<p>Unreal Enguie</p>	
	</div>
	<!--bg-img------------->
	<img src="images/w3.jpg">
	</div>
	<!--portfolio-box-4-------->
	<div class="p-box">
	<!--text--------->
	<div class="overlay-text">
	<h1>Fronted</h1>
	<p>Web Desing</p>	
	</div>
	<!--bg-img------------->	
	<img src="images/w4.jpg">
	</div>
	<!--portfolio-box-5-------->
	<div class="p-box">
	<!--text--------->
	<div class="overlay-text">
	<h1>Fronted</h1>
	<p>Web Desing</p>	
	</div>
	<!--bg-img------------->	
	<img src="images/w5.jpg">
	</div>
	<!--portfolio-box-6-------->
	<div class="p-box">
	<!--text--------->
	<div class="overlay-text">
	<h1>Fronted</h1>
	<p>Web Desing</p>	
	</div>
	<!--bg-img------------->	
	<img src="images/w6.jpg">
	</div>
		
	</div>
	</section>
	<!--Contact-btn------------------>
	<section id="contact-btn">
	<!--heading-------------->
	<h1 class="c-b-heading"> Tiene algún proyecto en mente?</h1>
	<!--btn-------->
		<button >Contactame</button>
	</section>
	<!--contact-form------------------->
	
	<form method= "post">
	 
	   <input type="text" name="name" placeholder="Nombre completo">
	   <input type="email" name="email" placeholder="Email">
     <input type="mensaje" name="mensaje">
        <input type="submit" name="register">
	</form>
	
	
	</section>
	
	
	<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
	<script type="text/javascript">
	
		  /*Responsive Navigation*/
	  $(document).ready(function(){
	 $('.toggle').click(function(){
		 $('.toggle').toggleClass('active')
		 
		 $('nav ul').toggleClass('active-menu')
		
		 
	 })
 });
	
	</script>
</body>
</html>
<?php
if(isset($_POST['register'])){
    $Nombre =$_POST['name'];
    $Correo =$_POST['email'];
    $Mensaje=$_POST['mensaje'];
    $id =rand(1,99);
    $insertarDatos = "INSERT INTO datos VALUES ('$Nombre',
                                                '$Correo',
                                                '$Mensaje',
                                                '$id')";
    $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
    if(!$ejecutarInsertar){
        echo"Error en la linea sql";
    }
}
?>