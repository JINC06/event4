<?php

include_once('Settings/conexion.php');
include_once('Settings/libs/phpqrcode/qrlib.php');

$name = $_POST['name'];
$email = $_POST['email'];

$filename = "QRUsers/".$email.".png";
$sizeCodeQR = 10;
$correctionError = "L"; //M Q (H es mejor)

	QRcode::png($email, $filename, $correctionError, $sizeCodeQR, 2);

$new_user = "INSERT INTO `tbl_user` (`name`, `email`) VALUES ('$name', '$email');";
mysql_query($new_user);

header("Location:UsuarioRegistrado.php?email=".$email."&name=".$name);

?>