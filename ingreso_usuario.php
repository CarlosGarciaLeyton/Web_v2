<?php 



if ($_SERVER["REQUEST_METHOD"] === "POST"){  

	$pass = $con -> real_escape_string(htmlentities($_POST['pass']));
    $correo = $con -> real_escape_string(htmlentities($_POST['correo']));

     $reqlen = strlen($pass)+ strlen($correo);

      if($reqlen > 0){
include_once ("../conexionBD/conexion.php");
$pass= sha1($pass);
$sel = $con->query("SELECT pass, correo FROM usuario WHERE  pass ='$pass' AND correo = '$correo'");
$row = mysqli_num_rows($sel);
if($row != 0){
	header('Location: bienvenida.php');

}

}else{
	header('Location: index.php');
}

}else{
	echo "USA EL FORMULARIO";
}
 ?>








 