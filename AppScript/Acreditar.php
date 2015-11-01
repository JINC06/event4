<?php
    
require_once("../Settings/conexion.php");

if(isset($_POST['Email'])){

    $Email = $_POST['Email'];

    $Consulta = "SELECT id, name  FROM tbl_user WHERE email = '$Email'";
    $res_Consulta = mysql_query($Consulta);
    $row_Consulta = mysql_fetch_assoc($res_Consulta);

    if(!is_null($row_Consulta['id'])){

        $data = array('Rpta' => 1, 'Nombre' => $row_Consulta['name']);
        print(json_encode($data));

        $Acreditado = "UPDATE tbl_user SET state = 1 WHERE email = '$Email'";
        mysql_query($Acreditado);

    }else{

        $data = array('Rpta' => 0);
        print(json_encode($data));

    }

}else{
    
    $data = array('Rpta' => 0);
    print(json_encode($data));
    
}


?>