<?php
class agendaController extends controller {

    public function __construct() {
        parent::__construct();
 
        $adm = new Usuarios();
        if(!$adm->isLogged()) {
            header("Location: ".BASE."login");
        }
        
    }

    public function index() {
        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $date = addslashes($_POST['date']);

                
                $agenda = new agenda();
               $agenda->inserir($nome, $date);

                header("Location: ".BASE."agenda");     

        }


        $this->loadTemplate('agenda', $dados);
    }




    
}
?>