<html>
<head>
	<title>Not-Vulnerable Site!</title>

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
		<h1>Welcome to my site!</h1>
		<br>

		<?php
			session_start();
			if (!isset($_SESSION['user'])){
				echo "<p>You are not logged in. Please <a href = '#loginbox'> log in</a></p>";
		?>

			<h3>Login</h3>
			<form name="login" role="form" action="login.php" method="post" id="loginbox">
				<div>
					<label for = "uname">Username:</label>
					<input type="text" placeholder="Enter username here" class="form-control" name="uname">
				</div>

				<div>
					<label for = "pass">Password:</label>
					<input type="text" placeholder="Enter password here" class="form-control" name="pass">
				</div>
				<input type = "submit" value="Login">
			</form>

		<?php
			}else{
		 ?>

		 <p>You are logged in as <font color = "blue"><b><?php echo $_SESSION['user']; ?>.</b></font></p>
		 <br>
		 <?php
		 	if ($_SESSION['[priv]']<=9000){
				echo "<p>Your privilege level is only <font color = "blue"><b><?php echo $_SESSION['priv']; ?></b></font>...that's too low!<br>Maybe find a more priveleged account?</p>";
			}else{
				echo "<p>Flag: RIP_HARAMBE</p>";
			}
		  ?>
		  <br>
		 <a href = "logout.php">Log Out Here</a><br><br>

		 <?php
	 		}
	  	 ?>


	</div>
</body>
</html>
