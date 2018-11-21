<?php
class cartController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $products = new Products();
        $cart = new Cart();

        $dados['list'] = $cart->getList();
        if (isset($_SESSION['cart'])) {
            $qt=0;
            foreach ($_SESSION['cart'] as $qtd) {
                $qt += $qtd;
            }
            $dados['cart_qt'] = $qt;
        } else {
            $dados['cart_qt'] = 0;
        }
        
        $dados['cart_subtotal'] = $cart->getSubtotal();

        $this->loadTemplate('cart', $dados);
    }

    public function del($id) {
        if(!empty($id)) {
        $q =  $_SESSION['cart'][$id];
            if($q > 1) {    
            $_SESSION['cart'][$id] -= 1;
            header("Location: ".BASE."cart");
        } else {
            unset($_SESSION['cart'][$id]);
            header("Location: ".BASE."cart");
            exit;
        }
    }
}

    public function add() {

        if(!empty($_POST['id_product'])) {
            $id = intval($_POST['id_product']);
            $qt = intval($_POST['qt_product']);

            if(!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            if(isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id] += $qt;
            } else {
                $_SESSION['cart'][$id] = $qt;
            }
        }

        header("Location: ".BASE."cart");
        exit;

    }
 public function payment_redirect() {

        if(!empty($_POST['payment_type'])) {
            $payment_type = $_POST['payment_type'];

            switch($payment_type) {
                case 'checkout_transparente':
                    header("Location: ".BASE."psckttransparente");
                    exit;
                    break;
                case 'mp':
                    header("Location: ".BASE."mp");
                    exit;
                    break;
            }

        }

        header("Location: ".BASE."cart");
        exit;
    }

}