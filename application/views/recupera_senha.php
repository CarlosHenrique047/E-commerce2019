<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Recuperar Senha</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup.css'); ?>">
</head>
<body>

    
    <?php echo form_open('home/recuperar_senha', 'id="form-pessoas"'); ?>
    <label for="nome">Cpf:</label><br/>
    <input type="text" name="cpf" value=""/>
    <div class="error"><?php echo form_error('cpf'); ?></div>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" value=""/>
    <div class="error"><?php echo form_error('email'); ?></div>
    <input type="submit" name="recuperar_senha" value="recuperar senha" />
    <?php echo form_close(); ?>
    

</body>
</html>

