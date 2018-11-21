<?php
/**
* 
*/
class footerController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
		$dados = array();

 $data = array();

                $per = new perguntas();
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
        $data['limit_perguntas'] = $limit;
        $data['total_perguntas'] = $per->getTotalPerguntas();
        $data['perguntas'] = $per->getPerguntas($offset, $limit);
        
		$this->loadView('footer', $dados);

		}
    

}