<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
</head>
<body>

<div class="body-content">
  <div class="module">
    <h1>Registre-se</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="CPF" name="cpf" required />
      <input type="text" placeholder="Nome" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="date" placeholder="idade" name="idade" required />
      <input type="text" placeholder="endereco" name="endereco" required />



      <input type="submit" value="Registrar" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Limpar" name="limpar" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>