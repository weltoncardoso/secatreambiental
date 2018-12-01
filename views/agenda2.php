<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    
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
                events: '/secatreambiental/views/eventos.php',           
                eventColor: '#dd6777'
            });	
            
            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "/secatreambiental/views/cadastrar_evento.php",
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
    
    <style>
        #calendario{
            position: relative;
            width: 70%;
            margin: 0px auto;
        }        
    </style>
    
</head>
<body>    
    <div id='calendario'>
        <br/>
        <form id="novo_evento" action="" method="post">
         <input type="hidden" name="nome" required/><br/><br/>            
          <input type="hidden" name="data" required/><br/><br/>            
        </form>
    </div>
</body>
</html>