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

		<div class="register-logo">Register</div>

		<div class="register-box-body">

			<p class="login-box-msg">Register a user</p>

			<form action="RegistrarUsuarios.php" method="post" >
				
				<div class="form-group has-feedback">
		            <input type="text" class="form-control" name="name" placeholder="Full name">
		            <span class="glyphicon glyphicon-user form-control-feedback"></span>
		        </div>

		        <div class="form-group has-feedback">
		            <input type="email" class="form-control" name="email" placeholder="Email">
		            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		        </div>

				<div class="footer">
					<button id="BtnRegistrar" type="submit" class="btn bg-olive btn-block" >Enviar</button>
				</div>
			</form>

		</div>

	</div>

	<!-- jQuery 2.1.4 -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>