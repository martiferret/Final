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
<?php
error_reporting(E_ERROR | E_PARSE);
$emailErr = $nomErr = $comentariErr = "";
$email = $nom = $comentari = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

$host = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname = "wifi-vilafranca";

$conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nom"])) {
    $nomErr = " *Es requereix el nom";
    mysqli_close($conn);
  }else {
  	$nom = test_input($_POST["nom"]);
  	 if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomErr = "*Nomès està permes lletres i espais"; 
      mysqli_close($conn);
    }else{

    }
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
		$emailErr = " *Es requereix el correu electrònic";
		mysqli_close($conn);
	}else{
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = " *El format del correu electrònic no és correcte";
			mysqli_close($conn);
		}else{

		}
	}
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["comentari"])) {
		$comentariErr=" *Es requereix el comentari";
		mysqli_close($conn);
	}else{
		$comentari=test_input($_POST["comentari"]);

	}


}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO contacte (nom, email,missatge)
  values ('$nom','$email', '$comentari')";
  if (mysqli_query($conn,$sql)){
    
  }
  else{

  }
  $conn->close();
}























 ?>
<div class="container">
	<header>
		<h1>Contacte</h1>
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
    <h4>1.Formulari de contacte</h4>
	<form method="post" class="needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <input type="text" name="nom" class="form-control is-invalid" placeholder="Nom" >

        <?php 
        if ($nomErr != "") {
          echo '<div class="invalid-tooltip">';
          echo $nomErr;
          echo '</div>';
        }
        ?>
        
      </div>
    </div>
  </div>
   		
  	 <div class="form-group">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <input type="text" name="email" class="form-control is-invalid" placeholder="Email" >
        <?php 
        if ($nomErr != "") {
          echo '<div class="invalid-tooltip">';
          echo $emailErr;
          echo '</div>';
        }
        ?>
      
      </div>
    </div>
  </div>
  <br>
  		<div class="form-group">
    <label for="exampleFormControlTextarea1">Escriu el teu comentari</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <br>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>


 
		
	</section>
	<br>
	
	
	
	<footer>
		
	</footer>
</div>
</body>
</html>