


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

<div class="row">
<div class="col"></div>
<div class="col-6">

<div class="panel panel-success">
      <div class="panel-heading">
	
	  <h2>Stock News</h2>
	  </div>
      <div class="panel-body">	
	  <form  action="loginCheck_POST.php" method="post">
		  <div class="form-group">
			<input type="text" id="uname" name="uname" value="Email"  class="form-control" placeholder="Enter email"
					onfocus="this.value=''" autocomplete="off" >
		  </div>	
		  <div class="form-group">
		   <input type="password" id="pwd" name="pwd" value="Password" class="form-control" placeholder="Password"
					onfocus="this.value=''" autocomplete="off" >
		  </div>
		
			<button type="submit" class="btn btn-primary btn-sm" value="Login">Login</button>
			<a href="http://localhost/views/loginCREATE.php" class="create">Create account</a>
			<br>
			<input type="checkbox"/>Remember me
		</form>
	  </div>
    </div>
</div>
<div class="col"></div>
</div>

</div>





</body>
</html>
