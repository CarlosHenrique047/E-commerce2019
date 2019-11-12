<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/consultar.css'); ?>">	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1380bcc4e6.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">E-mail</th>
      <th scope="col">Sexo</th>
      <th scope="col">Opcoes</th>
    </tr>
  </thead>
  <tbody>
    <?php

    
      foreach($users->result_array() as $row){
        
    ?>

    <tr>
      <td><?php echo $row['nome_completo'] ?></td>
      <td><?php echo $row["cpf"] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['sexo'] ?></td>
      <td>
        <a href="<?php echo base_url() . 'home/deletar/' . $row['id_usuario']; ?>" onclick="return confirm('Tem certeza que deseja deletar esse registro?')"><i class="fas fa-trash"></i></a>
        <a href="<?php echo base_url() . 'home/editar/' . $row['id_usuario']; ?>"><i class="fas fa-edit"></i></a>
      </td>
      <!-- <td><button class="btn-editar"><i class="fas fa-edit"></i></button><button class="btn-deletar" onclick="return confirm('Tem certeza que deseja deletar esse registro?')" ><i class="fas fa-trash"></i></button></td> -->
    </tr>

    <?php
      }
    
    ?>

  </tbody>
  </table>
</div>

</body>
</html>