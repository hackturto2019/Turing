

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
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

  <div id='calendar'></div>

</body>
</html>
