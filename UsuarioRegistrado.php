<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Event 4</title>

	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">    
 	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body class="frame register-page">
	
	<div class="register-box" id="login-box">

		<div class="register-logo">User registered</div>

		<div class="register-box-body">

			<h3 class="login-box-msg">Congratulations have been successfully registered</h3>

			<div class="footer">
				<a href="tcpdf/generator/TicketEvent.php?name=<?php echo $_GET['name']; ?>&email=<?php echo $_GET['email']; ?>"><button  class="btn bg-sucess btn-block" ><b>Download ticket</b></button></a>
			</div>

			<br/>
			<a href="index.php" >Register another user</a>
			<br/>
			<a href="List.php" >View subscribed</a>

		</div>

	</div>

	<!-- jQuery 2.1.4 -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>