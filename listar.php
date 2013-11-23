<?php session_start(); ?>
<?php include_once 'header.php' ?>
<body>
	<?php if($_SESSION['logado']):?>
		<a href="sair.php"> Logout (sair)</a><br>
			Bem-vindo ao PHP! Sistema Logado.
	<?php else:?>
		<?php header("Location: form.php") ?>
<?php endif; ?>
</body>
</html>