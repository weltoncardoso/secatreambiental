<?php
/**
* 
*/
class noticiasController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
		$data = array();
		    $not = new noticias();
                $limit = 5;
                $offset = 0;
                $data['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $data['p'] = intval($_GET['p']);
                    if($data['p'] == 0){
                        $data['p'] = 1;
                    }
                }

        $offset = (5 * ($data['p']-1));
        $data['limit_noticias'] = $limit;
        $data['total_noticias'] = $not->getTotalNoticias();
        $data['images'] = $not->getImagem($offset, $limit);
        $data['noticias'] = $not->getNoticias($offset, $limit);


		$this->loadView('noticias', $data);

		}
}