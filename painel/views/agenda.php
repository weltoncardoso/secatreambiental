<html>
<head>
    
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
            Nome do Evento: <input type="text" name="nome" required/><br/><br/>            
            Data do Evento: <input type="date" name="date" required/><br/><br/>            
            <button type="submit"> Cadastrar novo evento </button>
        </form>
    </div>
</body>
</html>