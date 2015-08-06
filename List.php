<?php 

include_once('Settings/conexion.php');

$users = "SELECT * FROM  `tbl_user`";
$res_users = mysql_query($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Event 4</title>

	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />    
 	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body class="frame register-page">
	
	<section class="content" >

		<div style="width: 900px;margin: 0 auto;" >
			<div class="row">
	            <div class="col-xs-12">
	              <div class="box">
	                <div class="box-header">
	                  <h3 class="box-title">Users registers</h3>
	                </div><!-- /.box-header -->
	                <div class="box-body table-responsive no-padding">
	                  <table class="table table-hover">
	                    <tbody>
	                    <tr>
	                      <th>ID</th>
	                      <th>Name</th>
	                      <th>Email</th>
	                      <th>Status</th>
	                    </tr>

	                    <?php
	                    	$cont = 1;
	                    	while($row_user = mysql_fetch_assoc($res_users)){
	                    ?>
	                    <tr>
	                      <td><?php echo $cont; ?></td>
	                      <td><?php echo $row_user['name']; ?></td>
	                      <td><?php echo $row_user['email']; ?></td>
	                      <td><?php if(!strcmp($row_user['state'], '1')){ ?><i style="color:green" class="fa fa-check-circle" ></i> <?php }else{ ?>  <i style="color:red" class="fa fa-times" ></i><?php } ?></td>
	                    </tr>
	                    <?php
	                    		$cont = $cont + 1;
	                    	}
	                    ?>
	                    
	                  </tbody></table>
	                </div><!-- /.box-body -->
	              </div><!-- /.box -->
	            </div>
	        </div>

      	</div>


	</section>

	<!-- jQuery 2.1.4 -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>