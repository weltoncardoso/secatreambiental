<?php
class productController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        header("Location: ".BASE);
    }


    public function open($id) {
         $dados = array();
        $products = new Products();

        $info = $products->getProductInfo($id);

        if(count($info) > 0) {

            $dados['product_info'] = $info;
            $dados['product_images'] = $products->getImagesByProductId($id);
            $this->loadTemplate('product', $dados);
        } else {
            header("Location: ".BASE);
        }


    }
























}