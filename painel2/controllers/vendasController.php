<?php
class vendasController extends controller {

    public function __construct() {
        parent::__construct();
                $usuarios = new Usuarios();
        if(!$usuarios->isLogged()) {
            header("Location: ".BASE."login");

    }

    public function index() {
    	$dados = array(
            'vendas' => array()
        );

        $vendas = new vendas();
        $dados['vendas'] = $vendas->getVendas();


    	$this->loadTemplate('vendas', $dados);
    }

    public function ver($id) {

        if(!empty($id)) {
            $dados = array(
                'venda' => array(),
                'produtos' => array()
            );

            $vendas = new vendas();
            $prod = new cursos();

            $offset = 0;
            $limit = 50;

            if(isset($_POST['status']) && !empty($_POST['status'])) {
                $status = addslashes($_POST['status']);
                $vendas->updateStatus($status, $id);
            }
            
            $dados['venda'] = $vendas->getVenda($id);
            $dados['produtos'] = $vendas->getProdutos($id);

            $this->loadTemplate('vendas_ver', $dados);
        }

    }

}
?>