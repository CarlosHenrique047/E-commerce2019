<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/consultar.css'); ?>">	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>238.893.430-31</td>
      <td>Otto</td>
      <td>teste@mdo.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>866.422.460-98</td>
      <td>Thornton</td>
      <td>teste@fat.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>698.360.400-80</td>
      <td>the Bird</td>
      <td>teste@twitter.com</td>
    </tr>
  </tbody>
  </table>
</div>

</body>
</html>