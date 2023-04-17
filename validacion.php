<?php
	session_start();
	$_SESSION['Ip']=$_POST['IP'];
	$_SESSION['Usuario']=$_POST['User'];
	$_SESSION['password']=$_POST['Password'];
	$enlace = mysqli_connect($_SESSION['Ip'],$_SESSION['Usuario'],$_SESSION['password']);
	
	if (!$enlace) {
	  mysqli_close($enlace);
	  header('inicio.html');
	}
	
	else{
		header('Location:seleccionbd.php');
	}
?>