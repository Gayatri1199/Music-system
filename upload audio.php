<?php

error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<br>
	<br>
	<br>
	
<center>
	<div class="container">
						<div class="col-md-6 login-left">
				<h2>Upload your file here</h2>
				<form action="Audio.php" method="post" enctype="multipart/form-data">
						<div>
							<label>YOUR AUDIO FILE</label>
							<input type="file" name="uploadfile" class="form-control"
							value="" >
						</div>
						<div class="form-group">
							<br>
							<br>
							<input type="submit" value="click here" name="submit">
						</div>


				</form>
			</div>
<a class="float-right" href="logout.php">LOGOUT</a>

			</div>
			
</center>
</form>
</body>
</html>
