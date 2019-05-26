<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
	<style>
	.container {
		width:996px;
		margin:0px auto;
		font-size:1em;
	}
	section,aside {
		padding: 10px;
		background:#ccc;
		-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px;
	}
	section {
		float: left;
		width: 70%;
	}
	aside {
		float: right;
		width: 25%;
	}
	nav {
		overflow: hidden;
	}
	nav ul {
		list-style-type:none;
		float:left;
		padding:0px;
	}
	nav ul li {
		float:left;
		padding:3px 10px;
		margin:2px;
		background:#ccccff;
		-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px;
	}
	footer {
		margin:10px;
		text-align:center;
		clear:both;
	}
 
	/* para 980px o menos */
	@media screen and (max-width:980px) {
		.container {
			width:98%;
		}
		section {
			width:68%;
		}
	}
 
	/* para 700px o menos */
	@media screen and (max-width:700px) {
		aside,section {
			float:none;
			width:96%;
		}
		nav, section {
			font-size:1.2em;
		}
		aside {
			margin-top:5px;
		}
		nav ul {
			float:none;
			clear:both;
		}
	}
 
	/* para 480px o menos */
	@media screen and (max-width:480px) {
		aside {
			display:none;
		}
		nav, section {
			font-size:1.5em;
		}
		section {
			width:94%;
		}
		nav ul {
			float:left;
			clear:none;
			width:50%;
		}
		nav ul li {
			float:none;
		}
	}
	</style>
 
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Mapa de la xarxa Wifi</h1>
	<header>
 
	<nav>

		<ul>
			
			<li><a href="quees.php">Què és?</a></li>
			<li><a href="mapa.php">Mapa de la xarxa WIFI</a></li>
			<li><a href="contacte.php">Contacte</a></li>
		</ul>
	
	</nav>
	<aside>
    <img src="wifi.png" alt="Logo Wifi" height="100%" width="100%">
  </aside>
 
	<section>
		<h4>1.Mapa de la xarxa WIFI</h4>
		<iframe src="https://www.google.com/maps/d/embed?mid=1Nke-As5Gn-96FopwU2jEr5wq-JgV1CeS&hl=ca" width="640" height="480"></iframe>
 
		
	</section>
	<br>
	
	
	
	<footer>
		
	</footer>
</div>
</body>
</html>