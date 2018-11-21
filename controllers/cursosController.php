<?php
/**
* 
*/
class cursosController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
		$data = array();
		    $not = new cursos();
            $cart = new Cart();
                $limit = 10;
                $offset = 0;
                $data['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $data['p'] = intval($_GET['p']);
                    if($data['p'] == 0){
                        $data['p'] = 1;
                    }
                }

        $offset = (10 * ($data['p']-1));
        $data['limit_cursos'] = $limit;
        $data['total_cursos'] = $not->getTotalCursos();
        $data['cursos'] = $not->getCursos($offset, $limit);
        if (isset($_SESSION['curso'])) {
            $qt=0;
            foreach ($_SESSION['curso'] as $qtd) {
                $qt += $qtd;
            }
            $data['curso_qt'] = $qt;
        } else {
            $data['curso_qt'] = 0;
        }
        
        $data['curso_subtotal'] = $cart->getSubtotal();

		$this->loadView('cursos', $data);

		}
}