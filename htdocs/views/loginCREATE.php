<?php
	echo '<!DOCTYPE html>
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

<div class="row">
<div class="col"></div>
<div class="col-6">

<div class="panel panel-success">
      <div class="panel-heading">
	
	  <h2>Stock News</h2>
	  </div>
      <div class="panel-body">	<form>
		  <div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary btn-sm">Create Account</button>
		</form>
	  </div>
    </div>
</div>
<div class="col"></div>
</div>

</div>

</body>
</html>
'

?>