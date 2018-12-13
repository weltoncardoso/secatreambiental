<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo BASE; ?>assets/img/ico.ico">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/fonts/font-awesome/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE; ?>assets/css/style.css">


    <title>Secatre Ambiental</title>
  </head>
  <body>
    <?php include('agenda2.php'); ?>
  </body>
</html>


<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> </title>

    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>

    <!-- script de tradução -->
    <script src='fullcalendar/lang/pt-br.js'></script>

    <script>

       $(document).ready(function() {
           	var date = new Date();

            //CARREGA CALENDÁRIO E EVENTOS DO BANCO
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: date,
                editable: true,
                eventLimit: true,
                events: '<?php echo BASE; ?>views/eventos.php',
                eventColor: '#dd6777'
            });

            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo BASE; ?>views/cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {
                        if(data == "1"){
                            alert("Cadastrado com sucesso! ");
                            //atualiza a página!
                            location.reload();
                        }else{
                            alert("Houve algum problema.. ");
                        }
                    }
                });
                return false;
            });
	   });

    </script>

</body>
</html>
