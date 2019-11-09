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
    <form class="form" action="<?php base_url(); ?>home/salvar" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="CPF" name="cpf" required />
      <input type="text" placeholder="Nome" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="date" placeholder="idade" name="idade" required />
      <input type="text" placeholder="Endereco" name="endereco" required />
    
      <select name="sexo">
          <option value="Homem">Homem</option>
          <option value="Mulher">Mulher</option>
          <option value="Outro">Outro</option>
      </select>

      <div class="div-preferencias">
        <h2>Preferencias de compra:</h2>
        <div class="checkboxOption"><input type="checkbox" name="livro">Livro</div>
        <div class="checkboxOption"><input type="checkbox" name="jogos">Jogos</div>
        <div class="checkboxOption"><input type="checkbox" name="moveis">Móveis</div>
        <div class="checkboxOption"><input type="checkbox" name="eletrodomesticos">Eletrodomésticos</div>
        <div class="checkboxOption"><input type="checkbox" name="brinquedos">Brinquedos</div>
        <div class="checkboxOption"><input type="checkbox" name="informatica">Informática</div>
      </div>

      <input type="submit" value="Registrar" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Limpar" name="limpar" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>