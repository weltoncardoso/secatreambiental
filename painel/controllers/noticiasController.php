<?php
class noticiasController extends controller {

    public function __construct() {
        parent::__construct();
 
        $adm = new Usuarios();
        if(!$adm->isLogged()) {
            header("Location: ".BASE."login");
        }
        
    }

    public function index() {
        $dados = array();
        $not = new noticias();
                $limit = 3;
                $offset = 0;
                $dados['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $dados['p'] = intval($_GET['p']);
                    if($dados['p'] == 0){
                        $dados['p'] = 1;
                    }
                }

        $offset = (3 * ($dados['p']-1));
        $dados['limit_noticias'] = $limit;
        $dados['total_noticias'] = $not->getTotalNoticias();
        $dados['images'] = $not->getImagem($offset, $limit);
        $dados['noticias'] = $not->getNoticias($offset, $limit);


        $this->loadTemplate('noticias', $dados);
    }


    public function add() {

        $dados = array();

        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $descricao = addslashes($_POST['descricao']);
            $texto = addslashes($_POST['texto']);
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

                $not = new noticias();
                $id = $not->inserir($titulo, $descricao, $texto);

                $not->inserirImagem($id, $md5imagem);

                header("Location: ".BASE."noticias");
            }
        }

        $this->loadTemplate('noticias_add', $dados);
    }

    public function edit($id) {
        $dados = array(
            'noticias' => array(),
            'imagem' =>array()
        );

        $offset = 0;
        $limit = 500;
        
        $not = new noticias();
        $dados['imagem'] = $not->getImagem($offset, $limit);
        $dados['noticias'] = $not->getNoticia($id);


        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $descricao = addslashes($_POST['descricao']);
            $texto = addslashes($_POST['texto']);


            $not->updateNoticia($id, $titulo, $descricao, $texto);

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


            header("Location: ".BASE."noticias");
            
        }

        $this->loadTemplate('noticias_edit', $dados);
    }

    public function remove($id) {

        if(!empty($id)) {

            $not = new noticias();
            $not->removerNoticia($id);

            header("Location: ".BASE."noticias");

        }

    }

    
}
?>