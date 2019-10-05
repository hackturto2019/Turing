<?php

	$tipoTurismo = $_POST["tipoTurismos"];
	$meioTransporte = $_POST["meioTransporte"];
	$tipoViagem = $_POST["tipoViagem"];
	$nacionalidade = $_POST["nacionalidade"];
	$tipoGastronomia = $_POST["tipoGastronomia"];

	$lista = array("$tipoTurismo", "$meioTransporte", "$tipoViagem", "$nacionalidade", "$tipoGastronomia");
	echo $lista[2];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #212529;"" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="font-family: 'Lobster', cursive;">Novo Destino</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="eventos.php">Eventos</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
              </div>
            </form>
          </nav>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="password" class="form-control inputPassword2" placeholder="Senha" aria-label="Usuário" aria-describedby="basic-addon1">

              </div>
            </form>
          </nav>
          <CENTER><button type="button" class="btn btn-primary">Entrar</button></CENTER>
        </div>
      </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container" style="margin-top: 50px;">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4"></h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Hospedagem</a>
          <a href="#" class="list-group-item">Alimentação</a>
          <a href="#" class="list-group-item">Turismo</a>
        </div>

      </div>


      <!-- /.carrosel-->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <?php
            include "connectDatabase.php";
            #session_start();

            $query = "SELECT * FROM parceiro_restaurante";
            $result = mysqli_query($connect, $query);

            //while para criar os itens do dropdown
            echo "<div class='row'>";
            
            $tipoTurismo = $_POST["tipoTurismos"];
			$meioTransporte = $_POST["meioTransporte"];
			$tipoViagem = $_POST["tipoViagem"];
			$nacionalidade = $_POST["nacionalidade"];
			$tipoGastronomia = $_POST["tipoGastronomia"];

			$lista = array("$tipoTurismo", "$meioTransporte", "$tipoViagem", "$nacionalidade", "$tipoGastronomia");
			echo $lista[2];


            while($row = mysqli_fetch_assoc($result)){
            	$arrayExplode = explode(';', $row['tags'])

            	if ($arrayExplode[0] == $lista[0]) {
            		echo "<div class='col-lg-4 col-md-6 mb-4'><div class='card h-100'><a href='#''><img class='card-img-top' src='img/' alt=''></a><div class='card-body'><h4 class='card-title'>".utf8_encode($row['nome_restaurante_parceiro'])."</a></h4><h5>$24.99</h5>".utf8_encode($row['descricao_restaurante_parceiro'])."</div><div class='card-footer'><small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small></div></div></div>";
            	}
        	}
          ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
