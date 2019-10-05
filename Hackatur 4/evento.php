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
  
  <link href='css/mainCore.css' rel='stylesheet' />
<link href="css/mainperce.css" rel='stylesheet' />
<link href='css/maindaygrid.css' rel='stylesheet' />
<link href='css/mainlist.css' rel='stylesheet' />
<link href='css/maintimegrid.css' rel='stylesheet' />
<script src='js/maincore.js'></script>
<script src='js/maininteraction.js'></script>
<script src='js/maindaygrid.js'></script>
<script src='js/mainlist.js'></script>
<script src='js/maingoogle-calendar.js'></script>
<script src='js/maintimegrid.js'></script>

<script>

  now = new Date

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: now,
      navLinks: true,
      businessHours: true, 
      editable: true,
      events: [

		<?php
            include "connectDatabase.php";
            $query = "SELECT * FROM calendario";
            if($resultado_events = mysqli_query($connect, $query)){
                while($row_events = mysqli_fetch_array($resultado_events)){
				?>
				{
				id: '<?php echo $row_events['id_evento']; ?>',
				title: '<?php echo $row_events['titulo_evento']; ?>',
				start: '<?php echo $row_events['inicio_data_evento']; ?>',
				end: '<?php echo $row_events['fim_data_evento']; ?>',
				color: '<?php echo $row_events['color_evento']; ?>',
				},<?php
			}
            }else{
                echo 'ERRO DE SEGMENTAÇÃO DE NUCLEO INTERNO';
            }

			
		?>



      ]
    });

    calendar.render();
  });

</script>


</head>

<body>
    <style>
        .logo{
            height:50px;
        }
    </style>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-family: 'Lobster', cursive;">
        <img class="logo" src="img/Logo bar.png" class="logo"></a>
        </div>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger b" href="#services">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger b" href="#parceiros">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger b" href="eventos.php">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger b" href="atracoes.php">Atrações</a>
          </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle b" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  
    <style>
    .top{
       margin-top : 100px;
    }
    
    </style>
    
    <div class=".modal-xl top"><div id='calendar'></div></div>
    


  <!-- Page Content -->
  <div class="container" style="margin-top: 50px;">






  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
