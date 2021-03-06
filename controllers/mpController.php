<?php
class mpController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$users = new Users();
    	$cart = new Cart();
    	$purchases = new Purchases();

        $dados['error'] = '';

        if(!empty($_POST['name'])) {

        	$name = addslashes($_POST['name']);
	        $cpf = addslashes($_POST['cpf']);
	        $telefone = addslashes($_POST['telefone']);
	        $email = addslashes($_POST['email']);
	        $password = addslashes($_POST['password']);
	        $cep = addslashes($_POST['cep']);
	        $rua = addslashes($_POST['rua']);
	        $numero = addslashes($_POST['numero']);
	        $complemento = addslashes($_POST['complemento']);
	        $bairro = addslashes($_POST['bairro']);
	        $cidade = addslashes($_POST['cidade']);
	        $estado = addslashes($_POST['estado']);

	        if($users->emailExists($email)) {
	            $uid = $users->validate($email, $password);

	            if(empty($uid)) {
	            	$dados['error'] = 'E-mail e/ou senha invalidos!';
	            }
	        } else {
	            $uid = $users->createUser($email, $password, $name, $cep, $rua, $numero, $complemento, $bairro, $cidade, $estado);
	        }


	        if(!empty($uid)) {

	        	$list = $cart->getList();
	        	$total = 0;

	        	foreach($list as $item) {
		            $total += (floatval($item['price']) * intval($item['qt']));
		        }


		        $id_purchase = $purchases->createPurchase($uid, $total, 'mp');

		        foreach($list as $item) {
		            $purchases->addItem($id_purchase, $item['id'], $item['qt'], $item['price']);
		        }

		        global $config;
		        $frete = 0;
		        $mp = new MP($config['mp_appid'], $config['mp_key']);

		        $data = array(
		        	'back_urls' => array(
		        		'success' => BASE.'mp/obrigadoaprovado',
		        		'pending' => BASE.'mp/obrigadoanalise',
		        		'failure' => BASE.'mp/obrigadocancelado'
		        	),
		        	'notification_url' => BASE.'mp/notificacao',
		        	'auto_return' => 'all',
		        	'external_reference' => $id_purchase
		        );

		        foreach($list as $item) {
		        	$data['items'][] = array(
		        		'title' => $item['name'],
		        		'quantity' => $item['qt'],
		        		'currency_id' => 'BRL',
		        		'unit_price' => floatval($item['price'])
		        	);
		        }

		        $link = $mp->create_preference($data);

		        if($link['status'] == '201') {

		        	//teste
		        	//$link = $link['response']['sandbox_init_point'];
		        	
		        	//producao
		        	$link = $link['response']['init_point'];
		        	header("Location: ".$link);
		        	exit;
		        } else {
		        	$dados['error'] = 'Opps algo saiu errado, tente novamente mais tarde...';
		        }


	        }


        }

        $this->loadTemplate('cart_mp', $dados);
    }

    public function notificacao() {
    	$purchases = new Purchases();

    	global $config;
		$mp = new MP($config['mp_appid'], $config['mp_key']);
		$mp->sandbox_mode(false);

		$info = $mp->get_payment_info($_GET['id']);

		if($info['status'] == '200') {

			$array = $info['response'];
			$ref = $array['collection']['external_reference'];
			$status = $array['collection']['status'];
			/*
			pending = Em análise
			approved = Aprovado
			in_procress = Em revisão
			in_mediation = Em processo de disputa
			rejected = Foi rejeitado
			cancelled = Foi cancelado
			refunded = Reembolsado
			charged_back = Chargeback
			*/

			if($status == 'pending') {
                    $purchases->setAnalyze($ref);
                }
                elseif($status == 'approved') {
                    $purchases->setPaid($ref);
                }
                elseif($status == 'in_procress') {
                    $purchases->setAvailable($ref);
                }
                elseif($status == 'in_mediation') {
                    $purchases->setDispute($ref);
                }
                elseif($status == 'rejected') {
                    $purchases->setReturned($ref);
                }
                elseif($status == 'cancelled') {
                    $purchases->setCancelled($ref);
                }
                elseif($status == 'refunded') {
                    $purchases->setDebited($ref);
                }
                elseif($status == 'charged_back') {
                    $purchases->setRetention($ref);
				}

    }


}
 public function obrigadoanalise() {
        unset($_SESSION['cart']);

        $this->loadTemplate("mp_analise");
    }

	public function obrigadoaprovado() {
        unset($_SESSION['cart']);

        $this->loadTemplate("mp_obrigado");
    }
    public function obrigadocancelado() {
        unset($_SESSION['cart']);

        $this->loadTemplate("mp_cancelado");
    }
}