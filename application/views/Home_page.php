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
	<button class="entrar">entrar</button>
	<button class="cadastrar" onclick="<?php echo base_url('signup');?>">cadastrar</button>
	<p class="message">Esqueceu sua senha? <a href="#">Clique aqui</a></p>
	</form>
  </div>
</div>

</body>
</html>