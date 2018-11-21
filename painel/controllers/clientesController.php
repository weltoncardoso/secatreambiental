<?php
class clientesController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $cli = new clientes();
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
        $dados['limit_clientes'] = $limit;
        $dados['total_clientes'] = $cli->getTotalClientes();
        $dados['images'] = $cli->getImagem($offset, $limit);
        $dados['clientes'] = $cli->getClientes($offset, $limit);


        $this->loadTemplate('clientes', $dados);
    }


    public function add() {

        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $estado = addslashes($_POST['estado']);
            $alunos = addslashes($_POST['alunos']);
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

                $cli = new clientes();
                $id = $cli->inserir($nome, $estado, $alunos);

                $cli->inserirImagem($id, $md5imagem);

                header("Location: ".BASE."clientes");
            }
        }

        $this->loadTemplate('clientes_add', $dados);
    }

    public function edit($id) {
        $dados = array(
            'clientes' => array(),
            'imagem' =>array()
        );

        $offset = 0;
        $limit = 5;
        
        $cli = new clientes();
        $dados['imagem'] = $cli->getImagem($offset, $limit);
        $dados['clientes'] = $cli->getCliente($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $estado = addslashes($_POST['estado']);
            $alunos = addslashes($_POST['alunos']);


            $cli->updateCliente($id, $nome, $estado, $alunos);

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


            header("Location: ".BASE."clientes");
            
        }

        $this->loadTemplate('clientes_edit', $dados);
    }

    public function remove($id) {

        if(!empty($id)) {

            $cli = new clientes();
            $cli->removerCliente($id);

            header("Location: ".BASE."clientes");

        }

    }

    
}
?>