<?php
class slideController extends controller {

    public function __construct() {
        parent::__construct();
  
        $adm = new Usuarios();
        if(!$adm->isLogged()) {
            header("Location: ".BASE."login");
        }
        
    }

    public function index() {
        $dados = array();
        $cli = new slide();
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
        $dados['limit_slide'] = $limit;
        $dados['total_slide'] = $cli->getTotalSlide();
        $dados['images'] = $cli->getImagem($offset, $limit);
        $dados['slides'] = $cli->getSlides($offset, $limit);
    

        $this->loadTemplate('slide', $dados);
    }


    public function add() {

        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $imagem = $_FILES['imagem'];

            if(in_array($imagem['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
                $ext = 'jpg';
                if($imagem['type'] == 'image/png') {
                    $ext = 'png';
                }

                $md5imagem = md5(time().rand(0,9999)).'.'.$ext;
                //so faz um por vez
                move_uploaded_file($imagem['tmp_name'], '../painel/assets/images/prods/'.$md5imagem);
               // move_uploaded_file($imagem['tmp_name'], '../painel/assets/images/prods/'.$md5imagem);

                $cli = new slide();
                $id = $cli->inserir($nome);

                $cli->inserirImagem($id, $md5imagem);

                header("Location: ".BASE."slide");
            }
        }

        $this->loadTemplate('slide_add', $dados);
    }

    public function edit($id) {
        $dados = array(
            'slide' => array(),
            'imagem' =>array()
        );

        $offset = 0;
        $limit = 5;
        
        $cli = new slide();
        $dados['imagem'] = $cli->getImagem($offset, $limit);
        $dados['slide'] = $cli->getSlide($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);


            $cli->updateSlide($id, $nome);

            if(isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
                $imagem = $_FILES['imagem'];

                if(in_array($imagem['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
                    $ext = 'jpg';
                    if($imagem['type'] == 'image/png') {
                        $ext = 'png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).'.'.$ext;
                move_uploaded_file($imagem['tmp_name'], '../painel/assets/images/prods/'.$md5imagem);
                    
                    $cli->updateImagem($id, $md5imagem);
                }
            }


            header("Location: ".BASE."slide");
            
        }

        $this->loadTemplate('slide_edit', $dados);
    }

    public function remove($id) {

        if(!empty($id)) {

            $cli = new slide();
            $cli->removerSlide($id);

            header("Location: ".BASE."slide");

        }

    }

    
}
?>