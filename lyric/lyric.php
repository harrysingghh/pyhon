<!DOCTYPE html>
<html>
	<head>
		<title>Lyrical</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href=css/style.css>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div>
			<img src="img/header.jpg" width="100%" height="400px">		
		</div> 
		<nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top rounded d-flex justify-content-center  ">
		  <a class="navbar-brand " href="#">LYRICAL</a>
		</nav>	
		<div class="jumbotron container pos2"	>
			<div class=" container ">
				<?php
			      $servername = "localhost";
			      $username = "admin";
			      $password = "Xr794ckS7eljwpSZ";
			      $conn = new mysqli($servername, $username, $password);
			      $db = "use lyric";
			      $conn->query($db);
			      $Name = trim($_GET['name'],"'");
			      $Singer = trim($_GET['singer'],"'");
			      $sql = "SELECT * FROM `main` WHERE `Name` LIKE '%$Name%' AND `Singer` LIKE '%$Singer%' ";
			      $result = $conn->query($sql);
			      $row = $result->fetch_assoc();
			      echo '
			      		<div class="text-center">
				      		<br>
				      		<br>
				      		<h3>' . $row["Name"]. ' Lyric </h3>
				      		<h4>' . $row["Singer"]. '</h4>
				      		<hr>
				      		<br>
				      		<pre>' 
. $row["Lyric"].
				    		'</pre>
			      		</div>
			      		<br>
			      		<hr>
			      		<br>
			      		';
			    ?>
			</div>
		</div>
		<?php
			include 'header.php';
		?>
	</body>
</html>