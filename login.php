<html>
<head>
	<title>Login</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style></style>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
 <div>
	<?php
	session_start();
	include('config.php');

	if (isset($_SESSION['user'])){
		echo "<div class='alert'>You are already logged in!</div>";
	}else{
		$uname = trim($_POST['uname']);
		$pass = $_POST['pass'];

		$query = "SELECT * FROM users WHERE uname = '".$uname."' AND pass = '".md5($pass)."';";

		$result = mysqli_query($db, $query);
		if (!$result){
			echo "An error occured.";
			echo "Message from SQL: ".mysqli_error($db);
		}
		if (mysqli_num_rows($result) > 0){
			$row=mysqli_fetch_assoc($result);
			$_SESSION['user']=$row['uname'];
			$_SESSION['priv']=$row['priveleges'];
			echo "<div class='alert login-success'><strong>Login Successful.</strong> Click <a href = '/'>here</a> to return home.</div>";
		}else{
			echo "<div class='alert login-success'><strong>Incorrect Login.</strong> Click <a href = '/'>here</a> to return home.</div>";
		}
	}
	 ?>
 </div>
</body>
</html>
