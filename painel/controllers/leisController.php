<?php
class leisController extends controller {

    public function __construct() {
        parent::__construct();
         $usuarios = new Usuarios();

        $adm = new Usuarios();
        if(!$adm->isLogged()) {
            header("Location: ".BASE."login");
        }
        
    }

    public function index() {
        $dados = array();
        $lei = new leis();
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
        $dados['limit_leis'] = $limit;
        $dados['total_leis'] = $lei->getTotalLeis();
        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        $dados['leis'] = $lei->getLeis($offset, $limit);


        $this->loadTemplate('leis', $dados);
    }


    public function add() {

        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $categoria = addslashes($_POST['categoria']);
            $pdfs = $_FILES['pdfs'];

                
                $md5pdfs = $pdfs['name'];      
                move_uploaded_file($pdfs['tmp_name'], '../painel/assets/pdfs/prods/'.$md5pdfs);

                $lei = new leis();
                $id = $lei->inserir($nome, $categoria);

                $lei->inserirpdfs($id, $md5pdfs);

                header("Location: ".BASE."leis");     

        }

        $this->loadTemplate('leis_add', $dados);
    }

    public function edit($id) {
        $dados = array(
            'leis' => array(),
            'pdfs' =>array()
        );

        $offset = 0;
        $limit = 2000;
        
        $lei = new leis();
        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        $dados['leis'] = $lei->getLei($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $categoria = addslashes($_POST['categoria']);
          

            $lei->updateLei($id, $nome, $categoria);

            if(isset($_FILES['pdfs']) && !empty($_FILES['pdfs']['tmp_name'])) {
                $pdfs = $_FILES['pdfs'];
        
                $md5pdfs = $pdfs['name'];      
                
                move_uploaded_file($pdfs['tmp_name'], '../painel/assets/pdfs/prods/'.$md5pdfs);
                    
                    $lei->updatePdfs($id, $md5pdfs);
                }


            header("Location: ".BASE."leis");
            
        }

        $this->loadTemplate('leis_edit', $dados);
    }




      public function view($id) {
        $dados = array(
            'leis' => array(),
            'pdfs' =>array()
        );

        $offset = 0;
        $limit = 2000;
        $lei = new leis();
        
        $dados['leis'] = $lei->getLeiPDF($id);
        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        
        foreach($dados['pdfs'] as $pd){ 
        foreach($dados['leis'] as $lei){ 

         if ($lei['id']== $pd['id_lei']){

        header("Content-Type: application/pdf");
        readfile("../painel/assets/pdfs/prods/".$pd['url']);
    }
}

}
}


    public function remove($id) {

        if(!empty($id)) {

            $lei = new leis();
            $lei->removerLei($id);

            header("Location: ".BASE."leis");

        }

    }

    
}
?>