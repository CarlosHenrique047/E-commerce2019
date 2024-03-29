<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/estatisticas.css'); ?>">

	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Pessoa');
        data.addColumn('number', 'Sexo');
        data.addRows([
          ['Homens', <?php echo $qtdH; ?> ],
          ['Mulheres', <?php echo $qtdM; ?> ]
        ]);
        var options = {'title':'Homens x Mulheres',
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<!-- Fim -->

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Pessoa');
  data.addColumn('number', 'Item');
  data.addRows([
    ['Livro', <?php echo $qtdLivros; ?>],
    ['Jogos', <?php echo $qtdJogos; ?>],
    ['Móveis', <?php echo $qtdMoveis; ?>],
    ['Eletrodomésticos', <?php echo $qtdEletrodomesticos; ?>],
    ['Brinquedos', <?php echo $qtdBrinquedos; ?>],
    ['Informática', <?php echo $qtdInformatica; ?>]
  ]);
  var options = {'title':'Itens Preferidos',
                 'width':540,
                 'height':300};
  var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
  chart.draw(data, options);
} 
</script>	
</head>
<body>

<body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>

    <div class="container-media">
      <h1>Média de idades</h1>
      <p class="media-idades"> <?php echo round($idades);?>  </p>
    </div>

    <div id="chart_div2"></div>
  </body>

</body>
</html>