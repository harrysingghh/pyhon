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
		<div class="jumbotron container pos2"	>
			<div class=" container ">
				<h1 class="text-center">Upload Lyrics </h1><br><hr>
			    <div class=" rounded text-center">
			    	<div  >
						<form  method="post" enctype="multipart/form-data" >
						  <div class="form-group ">
						    <input type="text" name="name" class="form-control "  placeholder="Song Title" >
						  </div>
						  <div class="form-group ">
						    <input type="text" name="singer" class="form-control "  placeholder="Singer Name" >
						  </div>
						  <div class="form-group ">
						    <input type="text" name="album" class="form-control "  placeholder="Album Name" >
						  </div>
						  <div class="form-group ">
						    <input type="number" name="year" class="form-control "  placeholder="Year" >
						  </div>
						  <div class="custom-file ">
						    <input type="file" class="custom-file-input" name="image"  id="customFile" accept="image/*" >
						    <label class="custom-file-label" for="customFile"  >Select Image</label>
						  </div>
						  <br>
						  <br>
						  <div class="form-group">
						    <textarea class="form-control " name="lyric" type="text" id="exampleTextarea" rows="3" placeholder="Lyric"></textarea>
						  </div>
						  <button type="submit" value="upload "	 class="btn btn-primary" >Submit</button>
						</form>					
						<?php
						  $servername = "localhost";
					      $username = "admin";
					      $password = "Xr794ckS7eljwpSZ";
					      $conn = new mysqli($servername, $username, $password);
					      $db = "use lyric";
					      $conn->query($db);
						  if (!empty($_FILES['image']['name']))
			                {
			                  	$Name=$_POST["name"];
			                  	$Singer =$_POST["singer"];
			                  	$Album= $_POST["album"];
			                  	$Year= $_POST["year"];
			                  	$sea = "INSERT INTO `search` (`Name`, `Singer`, `Year`) VALUES ('$Name', '$Singer', '$Year')";
							    $conn->query($sea);
			                  	$Lyric =addslashes($_POST["lyric"]);
			                  	$sql1 ="INSERT INTO `main` (`Name`, `Singer`, `Year`, `Lyric`) VALUES ('$Name', '$Singer', '$Year', '$Lyric');";
				                mysqli_query($conn,$sql1);
			                  	$Image = $_FILES["image"]["name"];
			                  	$temp =$_FILES["image"]["tmp_name"];
			                  	$sql="INSERT INTO `front_page` (`Name`, `Singer`, `Album`, `Year`, `Time`, `Image`) VALUES ('$Name', '$Singer', '$Album', '$Year', CURRENT_TIME(), '$Image');";
				                mysqli_query($conn,$sql);
			                	move_uploaded_file($temp, "img/$Image");
							  	$fname = str_replace(' ', '', $Name).str_replace(' ', '', $Singer) ;
								$myFile = "L/".$fname.".html"; 
								$fh = fopen($myFile, 'w');
								$stringData = '<!DOCTYPE html>
<html>
  <head>
    <title>'.$Name.' - '.$Singer.' | Lyrical </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=../css/style.css>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
      <img src="../img/header.jpg" width="100%" height="400px">    
    </div> 
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
    <div class="jumbotron container pos2" >
      <div class=" container ">
        <div class="text-center">
          <br>
          <br>
          <h1>' . $Name. ' Lyric </h1>
          <h2>' . $Singer. '</h2>
          <hr>
          <br>
          <pre>' 
.$_POST["lyric"].
        '</pre>
        </div>
        <br>
        <hr>
        <br>
      </div>
    </div>
    <div class="hea container rounded pos text-center pos1 ">
      <div class="row ">
        <div class="col-lg-6  ">
          <h3>Upload Lyrics </h3>
          <a href="../upload.php">
          <i class="fas fa-cloud-upload-alt fa-5x"></i>
          </a>
        </div>
        <div class="col-lg-6">
          <h3>Conect with us </h3>
          <br>
          <i class="fab fa-instagram fa-3x pad"></i>
          <i class="fab fa-facebook fa-3x pad"></i>
        </div>
      </div>  
      <br>
      <div class="text-center ">
        <a href="../disclaimer.html">Disclaimer </a> 
        <a href="../contact.php">Contact US </a> 
        <a href="../about.html">About US </a>  
      </div>  
    </div>
  </body>  
</html>';   
								fwrite($fh, $stringData);
								fclose($fh);
								$conn->close();
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
		<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
		</script>
	</body>
</html>