
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
		<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top rounded mb-4">
	        <a class="navbar-brand" href="#">Lyrical</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            
	            <form class="form-inline nav navbar-nav ml-auto" action="search.php" method="get">
	                <input class="form-control mr-sm-2 justify-content-sm-end" type="text" name="name" placeholder="Search" aria-label="Search">
	            </form>
	        </div>
	    </nav>	
		<div class="jumbotron container pos2"	>
			<div class=" container ">
				<h1 class="text-center">CONTACT US </h1><br><hr>
			    <div class="row rounded text-center">
			    	<div class="col-lg-6">
						<form  method="get" >
						  <div class="form-group ">
						    <input type="text" name="name" class="form-control   "  placeholder="Name" required>
						  </div>
						  <div class="form-group">
						    <input type="text" name="email" class="form-control   " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <input type="text" name="company" class="form-control   "  placeholder=" Subject "	required>
						  </div>
						  <div class="form-group">
						    <textarea class="form-control" required name="text" type="text" id="exampleTextarea" rows="3" placeholder="Your Text"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary" >Submit</button>
						</form>					
						<?php
						  $servername = "localhost";
					      $username = "admin";
					      $password = "Xr794ckS7eljwpSZ";
					      $conn = new mysqli($servername, $username, $password);
					      $db = "use lyric";
					      $conn->query($db);
						  if (!empty($_GET['name']))
							  {
							    $Name= $_GET["name"];
							    $Email= $_GET["email"];
							    $Company=$_GET["company"];
							    $Msg =$_GET["text"];
							    $sql="INSERT INTO `contact` (`Name`, `Email`, `Company`, `Msg`) VALUES ('$Name', '$Email', '$Company', '$Msg')";
							    $conn->query($sql);
							  	echo'<script>$(document).ready(function(){$("#myModal").modal("show");});</script>';
							  }
						?>
					</div>
				</div>
			</div>			
		</div>
		<?php
			include 'header.php';
		?>
		<a href="disclaimer.html">
			<div class="modal fade text-center" id="myModal">
		    	<div class="modal-dialog modal-dialog-centered text-center">
		      		<div class="modal-content">
		        		<div class="modal-header">
		          			<h4 class="modal-title ">Notification</h4>
		        		</div>
		        		<div class="modal-body">
		          			Information send succesfully<br>
		          			Click on dialogue to Home Page
		        		</div>		        
		      		</div>
		    	</div>
			</div>
		</a>
	</body>
</html>