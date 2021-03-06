<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Turing</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/tur.min.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #212529;" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php" style="font-family: 'Lobster', cursive; ">Novo Destino</a>
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
            <a class="nav-link js-scroll-trigger" href="atracoes.php">Atrações</a>
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


  <selection class="site-header">

  <div class="container col-xs-5 col-sm-5 col-md-5 col-lg-5 st" style=" height: 100vh !important;
  display: flex !important;
  flex-direction: column !important;
  justify-content: center !important;">
    <div class="row">
      <div class="col-sm">
        <div class="container">
          <form action="actionPesquisa.php" method="POST">
            <div class="form-row">
              <div class="form-group col">
                <center><label for="formGroupExampleInput">Qual tipo de turismo você procura?</label></center>
                    <center><div class="form-group col-md-5">
                      <select id="inputEstado" name="tipoTurismos" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Turismo Cultural</option>
                        <option>Turismo Gastronômico</option>
                        <option>Turismo Aventureiro</option>
                        <option>Turismo Ecológico</option>
                        <option>Turismo de Saúde</option>
                      </select>
                    </div></center>

                 <center><label for="formGroupExampleInput">Qual o principal meio de transporte que usa para viagens?</label></center>
                    <center><div class="form-group col-md-5">
                      <select id="inputEstado" name="meioTransporte" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Avião</option>
                        <option>Carro</option>
                        <option>Barco/Navio</option>
                        <option>Onibus</option>
                        <option>Bicicleta</option>
                      </select>
                    </div></center>

                  <center><label for="formGroupExampleInput">Suas viagens são geralmente em:</label></center>
                    <center><div class="form-group col-md-5">
                      <select id="inputEstado" name="tipoViagem" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Família</option>
                        <option>Grupo de amigos</option>
                        <option>Desacompanhado(a)</option>
                      </select>
                    </div></center>

                    <center><label for="formGroupExampleInput">Nacionalidade:</label></center>
                      <center><div class="form-group col-md-5">
                        <select id="inputEstado" name="nacionalidade" class="form-control">
                          <option selected>Escolher...</option>
                          <option>Brasileira</option>
                          <option>Estrangeiro</option>
                        </select>
                    </div></center>

                    <center><label for="formGroupExampleInput">Tipo gastronômico de preferência: </label></center>
                      <center><div class="form-group col-md-5">
                        <select id="inputEstado" name="tipoGastronomia" class="form-control">
                          <option selected>Escolher...</option>
                          <option>Comida Brasileira</option>
                          <option>Comida Chinesa</option>
                          <option>Comida Italiana</option>]
                          <option>Comida Mexicana</option>
                          <option>Comida Americana</option>
                        </select>
                    </div></center>
                    <center><button type="submit" name="continuarPesquisa" class="btn btn-primary mb-2">Continuar</button></center>


              </div>
            </div>
          </form>
              
</selection>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://use.fontawesome.com/c70b2650a0.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/tur.min.js"></script>

</body>

</html>
