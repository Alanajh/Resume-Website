<?php

	//Check login credentials
	$varUname = $_POST["uname"];
	$varPwd = $_POST["pwd"];
	require_once('mysqli_connect.php');
	$query = "SELECT * FROM admin WHERE user LIKE '$varUname' AND password LIKE '$varPwd'";
	$response = @mysqli_query($dbc, $query);
	if(mysqli_num_rows($response)==0){
		include('../views/loginFAIL.php');
	}else{
	  while($row = mysqli_fetch_array($response)){
			include('../views/loginSUCCESS.php');
	  }
	}

?>
