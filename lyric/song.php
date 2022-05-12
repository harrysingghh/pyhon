<!DOCTYPE html lang ="eu"> 
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
		<?php
	      include 'nav.php';
	    ?>		
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
			      $sql = "SELECT * FROM `main` WHERE `Name` LIKE '%$Name%'";
			      $result = $conn->query($sql);
			      $tot = mysqli_num_rows($result); //change
			      echo '<div class="text-center"><h3>'.$Name.'</h3></div><hr>';
			      echo '<div class="text-center card"><div class="card-header">'.$tot.' Songs Found</div><br><br>';
			      
			       if ($result->num_rows > 0) {
			          while($row = $result->fetch_assoc()) {
			          		$fname = str_replace(' ', '', $row["Name"]).str_replace(' ', '', $row["Singer"]) ;
			            	echo '<br> <a href="L/'.$fname.'.html">' . $row["Name"]. " by ". $row["Singer"]. "</a><br>";
			         	}
			      	} 
			          echo '</div>';
			    ?>
			</div>
		</div>
		<?php
			include 'header.php';
		?>
	</body>
</html>