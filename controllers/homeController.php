<?php
/**
* 
*/
class homeController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
		$data = array();
		    $not = new noticias();
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
                $cli = new slide();


        $data['limit_noticias'] = $limit;
        $data['total_noticias'] = $not->getTotalNoticias();
        $data['images'] = $not->getImagem($offset, $limit);
        $data['noticias'] = $not->getNoticias($offset, $limit);
        $data['total_slide'] = $cli->getTotalSlide();
        $data['images1'] = $cli->getImagem1($offset, $limit);
        $data['images2'] = $cli->getImagem2($offset, $limit);
        $data['images3'] = $cli->getImagem3($offset, $limit);
        $data['images4'] = $cli->getImagem4($offset, $limit);
        $data['images5'] = $cli->getImagem5($offset, $limit);
        $data['slides1'] = $cli->getSlides1($offset, $limit);
        $data['slides2'] = $cli->getSlides2($offset, $limit);
        $data['slides3'] = $cli->getSlides3($offset, $limit);
        $data['slides4'] = $cli->getSlides4($offset, $limit);
        $data['slides5'] = $cli->getSlides5($offset, $limit);
    
		$this->loadView('home', $data);

		}
}