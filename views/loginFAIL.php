<?php
	echo '		
			
<!DOCTYPE html>
<html>
<header>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/loginCSS.css">
</header>
<body>
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="../img/logo.jpg" width="55" height="25" alt="Bulls & Bears">
	</a>
</nav>
<div class="container-fluid" id="tank">
	<p class="pFail">Your login credentials seem to be incorrect. Please try again if
		you think there is an error. If you do not have a account
		please create one. <a href="http://localhost/views/loginCREATE.php">Create account</a></p> 
		
	<div class="homeBtn">
		 <button type="submit" class="btn btn-success btn-sm float-right homeBtn" value="Home">Home</button>
	</div>

</div>

</body>
</html>
'
?>