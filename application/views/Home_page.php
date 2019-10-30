<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">	
</head>
<body>

<div class="login-page">
  <div class="form">
	<h1>Login</h1>
	<form class="login-form">
	<input type="text" placeholder="Usuário"/>
	<input type="password" placeholder="Senha"/>
	<input type="submit" value="entrar" class="entrar">
	
	</form>
	<form action="<?php echo base_url('signup');?>">
		<input type="submit" value="cadastrar" class="cadastrar" href="<?php echo base_url('signup');?>">
	</form>
	
	<p class="message">Esqueceu sua senha? <a href="#">Clique aqui</a></p>
  </div>
</div>

</body>
</html>