<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
</head>
<body>

    <!-- abre o formulário de edição -->
    <?php echo form_open('home/alterar', 'id="form-pessoas"'); ?>
    <input type="hidden" name="id_usuario" value="<?php echo $edit_users[0]->id_usuario; ?>"/>
    <label for="nome">Nome:</label><br/>
    <input type="text" name="nome_completo" value="<?php echo $edit_users[0]->nome_completo; ?>"/>
    <div class="error"><?php echo form_error('nome'); ?></div>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value="<?php echo $edit_users[0]->email; ?>"/>
    <div class="error"><?php echo form_error('email'); ?></div>
    <label for="nome">Endereco:</label><br/>
    <input type="text" name="endereco" value="<?php echo $edit_users[0]->endereco; ?>"/>
    <div class="error"><?php echo form_error('endereco'); ?></div>
    <input type="submit" name="alterar" value="Alterar" />
    <?php echo form_close(); ?>
    <!-- fecha o formulário de edição -->

</body>
</html>