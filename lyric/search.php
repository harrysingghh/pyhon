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
		<?php
	      include 'nav.php';
	    ?>
		<div class="container jumbotron pos1"	>
			<div class=" container ">
				<?php
			      $servername = "localhost";
			      $username = "admin";
			      $password = "Xr794ckS7eljwpSZ";
			      $conn = new mysqli($servername, $username, $password);
			      $db = "use lyric";
			      $conn->query($db);
			      $sea2=1;
			      $sea = 1;
			      $tot = 9;//change
			      $i=5;//change
			      $Name = trim($_GET['name'],"'");
			      echo '<div class="text-center"><h2> '.$Name. '</h2><hr></div>';
			      $sql = "SELECT * FROM front_page Where Name LIKE'%$Name%' ";
			      $result = $conn->query($sql);
			      $tot = mysqli_num_rows($result); //change
			      if ($result->num_rows > 0) {
			      	  echo '<div class="text-center card  "><div class="card-header">'.$tot.' Songs Found</div><br><br>';
			          while($row = $result->fetch_assoc()) {
			          		$fname = str_replace(' ', '', $row["Name"]).str_replace(' ', '', $row["Singer"]) ;
			            	echo '<a href="L/'.$fname.'.html">' .$row["Name"].' by '. $row["Singer"].'<br></a><br>';
			            	$i-=1;//change
			            	if ($tot>5 and $i==0) {
			          			echo '<a href="song.php?name='.$Name.'"><button  class="btn btn-primary"> For Song Result</button></a><br>';
			          			$i=5;
			          			break;
			          		}
			          }
			          echo "</div><br>";
			      } else {
			          $sea = 0;
			      }
			      $sql = "SELECT DISTINCT Singer  FROM front_page Where Singer LIKE'%$Name%' ";
			      $result = $conn->query($sql);
			      $tot = mysqli_num_rows($result); //change
			      if ($result->num_rows > 0) {
			      	  echo '<div class="text-center card "><div class="card-header">'.$tot.' Artist Found</div><br><br>';
			          while($row = $result->fetch_assoc()) {
			            	echo '<a href="Singer.php?singer='.$row["Singer"].'">Artist '. $row["Singer"]. " songs<br> </a><br>";
			            	$i-=1;//change
			            	if ($tot>5 and $i==0) {
			          			echo '<a href="singersea.php?singer='.$Name.'"><button  class="btn btn-primary"> For All Singer Result</button></a>';
			          			$i=5;
			          			break;
			          		}
			          }
			          echo "</div><br>";
			      } else {
			          $sea2=0;
			      }
			      if ($sea==0 and $sea2==0) {
			      	echo "Nothing found";
			      }
			    ?>
			</div>	
		</div>
		<?php
			include 'header.php';
		?>
	</body>
</html>