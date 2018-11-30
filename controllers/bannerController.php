<?php
/**
* 
*/
class bannerController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
	       $dados = array();
        $cli = new slide();
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
        $dados['limit_slide'] = $limit;
        $dados['total_slide'] = $cli->getTotalSlide();
        $dados['images'] = $cli->getImagem($offset, $limit);
        $dados['slides'] = $cli->getSlides($offset, $limit);
    

        $this->loadTemplate('banner', $dados);
    }

}