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

<body id="page-top">

<div>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #212529" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-family: 'Lobster', cursive;">Novo Destino</a>
      <button class="navbar-toggler navbar-toggler-right" type="button"  data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Roteiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="parceiros.html">Parceiros</a>
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
          <form action="actionCadastroUser.php" method="POST">
            <div class="form-row">
              <div class="form-group col">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" class="form-control" name="nomeUsuario" required="required" pattern="[a-zA-Zá-ýÁ-Ýã-õÃ-Õ\s]+$" maxlength="12"placeholder="Paulo">
              </div>
              <div class="col">
                <label for="formGroupExampleInput">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenomeUsuario" required="required" pattern="[a-zA-Zá-ýÁ-Ýã-õÃ-Õ\s]+$" maxlength="12" placeholder="Miguel">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" name="emailUsuario" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Defina uma senha</label>
                <input type="password" class="form-control" name="senhaUsuario" placeholder="Password">
              </div>

              
              <div class="form-group col-md-5">
                <label for="sexoUsuario">Sexo</label>
                <select id="sexoUsuario" name="sexoUsuario" class="form-control">
                  <option selected>Masculino</option>
                  <option selected>Feminino</option>
                  <option selected>Não declarar</option>;

                </select>
              </div>
              <div class="form-group col-md-7">
              <label for="inputAddress">Telefone</label>
              <input type="text" class="form-control" name="telefoneUsuario" placeholder="(63) 9 9900-0000">
            </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" name="enderecoUsuario" placeholder="Av. Teotonio Segurado">
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="estadoUsuario">ESTADO</label>
                <select id="estadoUsuario" name="estadoUsuario" class="form-control" >
                  <?php
                include "connectDatabase.php";
                $query = "SELECT * FROM estado";
                $result = mysqli_query($connect, $query);

                //while para criar os itens do dropdown
                while($row = mysqli_fetch_assoc($result)){
                  echo "Entrou";
                  echo "<option selected>".$row['nome']."</option>";
                } 
              ?>
                  <option selected>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="estadoUsuario">CIDADE</label>
                <select id="estadoUsuario" name="estadoUsuario" class="form-control" >
                  <?php
                include "connectDatabase.php";
                $query = "SELECT * FROM cidade";
                $result = mysqli_query($connect, $query);

                //while para criar os itens do dropdown
                while($row = mysqli_fetch_assoc($result)){
                  echo "Entrou";
                  echo "<option selected>".$row['nome']."</option>";
                } 
              ?>
                  <option selected>...</option>
                  <option>...</option>
                </select>
              </div>
              
              <div class="form-group col-md-4">
                <label for="inputZip">CEP</label>
                <input type="text" class="form-control" name="cepUsuario" placeholder="77000-000">
              </div>
            </div>
            <div class="form-group">
            </div>
            <center><button type="submit" class="btn btn-primary">CADASTRAR</button></center>
          </form>
        </div>
      </div>

    </div>
  </div>
</selection>
</div>




  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/tur.min.js"></script>

</body>

</html>
