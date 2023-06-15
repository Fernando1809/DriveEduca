<?php

include("config.php");

$nombre = $_POST["name"];
$email = $_POST["email"];
$user = $_POST["user"];
$pass   = $_POST["pass"];



//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $user'); window.location='../index.html' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe intenta de nuevo'); window.location='../login.html' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$idUsuario = dechex(time());
	$sqlgrabar = "INSERT INTO usuarios(idUsuario, nombre, email, usuario, contraseña) values ('$idUsuario','$nombre', '$email', '$user', '$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='../login.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysqli_error($conn);
	}
}


?>