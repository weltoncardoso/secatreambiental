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
        $cli = new agenda();
                $limit = 5;
                $offset = 0;
                $dados['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $dados['p'] = intval($_GET['p']);
                    if($dados['p'] == 0){
                        $dados['p'] = 1;
                    }
                }

        $offset = (5 * ($dados['p']-1));
        $dados['limit_agenda'] = $limit;
        $dados['total_agenda'] = $cli->getTotalAgendas();
        $dados['agenda'] = $cli->getAgendas($offset, $limit);


        $this->loadTemplate('agenda', $dados);
    }




    public function add() {
        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $date = addslashes($_POST['date']);

                
                $agenda = new agenda();
               $agenda->inserir($nome, $date);

                header("Location: ".BASE."agenda");     

        }


        $this->loadTemplate('agenda_add', $dados);
    }




    public function edit($id) {
   $dados = array(
            'agenda' => array(),
        );

        $offset = 0;
        $limit = 5;
        
        $cli = new agenda();
        $dados['agenda'] = $cli->getAgenda($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $date = addslashes($_POST['date']);


            $cli->updateAgenda($id, $nome, $date);
                    header("Location: ".BASE."agenda");

        }

        $this->loadTemplate('agenda_edit', $dados);
    }

    public function remove($id) {

        if(!empty($id)) {

            $cli = new agenda();
            $cli->removerAgenda($id);

            header("Location: ".BASE."agenda");

        }

    }



    
}
?>