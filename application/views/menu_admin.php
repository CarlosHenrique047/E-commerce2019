<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="vertical-center"> 
  <div class="container">
    <a href="<?php echo base_url('signup');?>"><span class="btn-cadastrar">cadastrar</span></a>
    <a href="<?php echo base_url('consultar');?>"><span class="btn-consultar">consultar</span></a>
    <a href="#"><span class="btn-estatisticas">estatísticas</span></a>
    <a href="<?php echo base_url('index');?>"><span class="btn-sair">sair</span></a>
  </div>
</div>
</body>
</html>