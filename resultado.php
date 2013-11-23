<?php session_start(); ?>
<?php include_once 'header.php' ?>
<body>
	<?php
		$login = $_POST['login'];
		$senha = $_POST['senha'];

			if ($login == "fernando" and $senha == 1234) {
				$_SESSION['logado'] = true;
				header("Location: listar.php");
			}
			else{
				echo "Usuário não logado";
			}
	?>
</body>
</html>
