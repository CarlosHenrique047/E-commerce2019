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
    <form class="form" action="<?=base_url();?>home/salvar" method="POST" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="CPF" name="cpf" minlength=11 maxlength="11" is_unique="usuarios.cpf" required />
      <input type="text" placeholder="Nome" name="nome_completo" minlength=30 required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="senha" autocomplete="new-password" minlength=6 maxlength="6" required />
      <input type="text" placeholder="idade" name="idade" min="1" max="110" required />
      <input type="text" placeholder="Endereco" name="endereco" required />
    
      <div class="div-preferencias">
        <h2>Sexo:</h2>
      <input type="radio" name="sexo" value="1" <?php echo  set_radio('myradio', '1', TRUE); ?> />Homem<br>
      <input type="radio" name="sexo" value="2" <?php echo  set_radio('myradio', '2'); ?> />Mulher
      </div>

      <div class="div-preferencias form-group">
        <h2>Preferencias de compra:</h2>
        <div class="checkboxOption">
          <input type="checkbox" value='1' name="preferencias[]" id='1'>
          <label for='1'>Livros</label>
        </div>
        <div class="checkboxOption">
          <input type="checkbox" value='2' name="preferencias[]" id='2'>
          <label for='2'>Jogos</label>
        </div>
        <div class="checkboxOption">
          <input type="checkbox" value='3' name="preferencias[]" id='3'>
          <label for='3'>Moveis</label>
        </div>
        <div class="checkboxOption">
          <input type="checkbox" value='4' name="preferencias[]" id='4'>
          <label for='4'>Eletrodomesticos</label>
        </div>
        <div class="checkboxOption">
          <input type="checkbox" value='5' name="preferencias[]" id='5'>
          <label for='5'>Brinquedos</label>
        </div>
        <div class="checkboxOption">
          <input type="checkbox" value='6' name="preferencias[]" id='6'>
          <label for='6'>Informatica</label>
        </div>
        <!-- <div class="checkboxOption"><input type="checkbox" value="2" name="preferencias[]">Jogos</div>
        <div class="checkboxOption"><input type="checkbox" value="3" name="preferencias[]">Móveis</div>
        <div class="checkboxOption"><input type="checkbox" value="4" name="preferencias[]">Eletrodomésticos</div>
        <div class="checkboxOption"><input type="checkbox" value="5" name="preferencias[]">Brinquedos</div>
        <div class="checkboxOption"><input type="checkbox" value="6" name="preferencias[]">Informática</div> -->
      </div>

      <input type="submit" value="Registrar" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Limpar" name="limpar" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>