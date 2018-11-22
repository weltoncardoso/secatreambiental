<?php
class cursosController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $not = new cursos();
                $limit = 3;
                $offset = 0;
                $data['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $data['p'] = intval($_GET['p']);
                    if($data['p'] == 0){
                        $data['p'] = 1;
                    }
                }

        $offset = (3 * ($data['p']-1));
        $dados['limit_cursos'] = $limit;
        $dados['total_cursos'] = $not->getTotalCursos();
        $dados['images'] = $not->getImagem($offset, $limit);
        $dados['cursos'] = $not->getCursos($offset, $limit);


        $this->loadTemplate('cursos', $dados);
    }


    public function add() {

        $dados = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $preco = addslashes($_POST['preco']);
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

                $not = new cursos();
                $id = $not->inserir($nome, $descricao, $preco);

                $not->inserirImagem($id, $md5imagem);

                header("Location: ".BASE."cursos");
            }
        }

        $this->loadTemplate('cursos_add', $dados);
    }

    public function edit($id) {
        $dados = array(
            'cursos' => array(),
            'imagem' =>array()
        );

        $offset = 0;
        $limit = 500;
        
        $not = new cursos();
        $dados['imagem'] = $not->getImagem($offset, $limit);
        $dados['cursos'] = $not->getCurso($id);


        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $descricao = addslashes($_POST['descricao']);
            $preco = addslashes($_POST['preco']);


            $not->updateCurso($id, $nome, $descricao, $preco);

            if(isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
                $imagem = $_FILES['imagem'];

                if(in_array($imagem['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {
                    $ext = 'jpg';
                    if($imagem['type'] == 'image/png') {
                        $ext = 'png';
                    }
                    $md5imagem = md5(time().rand(0,9999)).'.'.$ext;
                move_uploaded_file($imagem['tmp_name'], '../painel/assets/images/prods/'.$md5imagem);
                    
                    $not->updateImagem($id, $md5imagem);
                }
            }


            header("Location: ".BASE."cursos");
            
        }

        $this->loadTemplate('cursos_edit', $dados);
    }

    public function remove($id) {

        if(!empty($id)) {

            $not = new cursos();
            $not->removerCurso($id);

            header("Location: ".BASE."cursos");

        }

    }

    
}
?>