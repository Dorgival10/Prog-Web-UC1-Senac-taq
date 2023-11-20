<?php include("cabecalho.php") ?>
<?php include("../bd/conect.php") ?>

<link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <header class="container-fluid">
    <h2>SISTEMA DE SATISFAÇÃO DE ATENDIMENTO</h2>
  </header>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    //Gráfico 1
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Opções', 'Votos'],
        ['Ótimo', <?php Consultar("otimo") ?>],
        ['Regular', <?php Consultar("regular") ?>],
        ['Ruim', <?php Consultar("ruim") ?>],
      ]);

      var options = {
        title: 'Resultados',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }

    //Gráfico 2
    function drawChart1() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", {
          role: "style"
        }],
        ["Ótimo", <?php Consultar("otimo") ?>, "green"],
        ["Regular", <?php Consultar("otimo") ?>, "yellow"],
        ["Ruim", <?php Consultar("ruim") ?>, "red"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
        {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation"
        },
        2
      ]);

      var options = {
        title: "Votos por Opções",
        width: 600,
        height: 400,
        bar: {
          groupWidth: "95%"
        },
        legend: {
          position: "none"
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }
  </script>

  <body>
    <div class="row">
      <div class="col-sm-6">
        <div id="piechart" style="width: 800px; height: 500px;"></div>
      </div>
      <div class="col-sm-6">
        <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
      </div>
    </div>

  </body>



  <?php include("rodape.php") ?>