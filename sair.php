<?php 
	session_start();
	unset($_SESSION['logado']);
	header("Location: form.php");
 ?>