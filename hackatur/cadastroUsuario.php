<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Page-Enter" content="RevealTrans(Duration=2,Transition=12)">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

   <?php
    #inicia seção para acesso ao banco
    ?>


   <title>NOME</title>

  <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
   
  
<selection class="site-header">

  <div class="container borda col-xs-5 col-sm-5 col-md-5 col-lg-5">
    <div class="row">
      <div class="col-sm">
        <div class="container">
          <form>
            <div class="form-row">
              <div class="form-group col">
                <label for="formGroupExampleInput">Nome</label>
                <input type="text" class="form-control" placeholder="Paulo">
              </div>
              <div class="col">
                <label for="formGroupExampleInput">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Miguel">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Defina uma senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
              <div class="form-group col-md-5">
                <label for="inputState">Sexo</label>
                <select id="inputState" class="form-control">
                  <option selected>Masculino</option>
                  <option selected>Feminino</option>
                  <option selected>Prefiro não dizer</option>
                  <option selected>Selecione</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-7">
              <label for="inputAddress">Telefone</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="(63) 9 9900-0000">
            </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Av. Teotonio Segurado">
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputState">ESTADO</label>
                <select id="inputState" class="form-control" >
                  <option selected>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">CIDADE</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Palmas">
              </div>
              
              <div class="form-group col-md-4">
                <label for="inputZip">CEP</label>
                <input type="text" class="form-control" id="inputZip" placeholder="77000-000">
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>