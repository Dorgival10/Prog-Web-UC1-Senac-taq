<?php include 'cabecalho.php' ?>
<?php include("../bd/conect.php")?>
<?php 
    $opcao = $_GET["acao"];
    Inserir($opcao);
    header("Refresh: 5; url=../index.php");
?>


<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="container-fluid">
        <h2>SISTEMA DE SATISFAÇÃO DE ATENDIMENTO</h2>
    </header>
<section class="row sec-conteudo">
    <div class="col-sm-12" style="text-align:center">
        <h2>Obrigado por avaliar!!!</h2>
        <div class="spinner-border"></div>
    </div>
</section>

<?php include 'rodape.php' ?>