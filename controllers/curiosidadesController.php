<?php
/**
* 
*/
class curiosidadesController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
      $dados = array();
        $lei = new leis();
                $limit = 10;
                $offset = 0;
                $dados['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $dados['p'] = intval($_GET['p']);
                    if($dados['p'] == 0){
                        $dados['p'] = 1;
                    }
                }

        $offset = (10 * ($dados['p']-1));
        
        $dados['limit_leis'] = $limit;
        $dados['total_leis_biografias'] = $lei->getTotalLeisBiografias();
        $dados['total_leis_outras'] = $lei->getTotalLeisOutras();

        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        $dados['leisbiografias'] = $lei->getLeisBiografias($offset, $limit);
        $dados['leisoutras'] = $lei->getLeisOutras($offset, $limit);

		$this->loadTemplate('curiosidades', $dados);

		}
      public function view($id) {
        $dados = array(
            'leis' => array(),
            'pdfs' =>array()
        );

        $offset = 0;
        $limit = 10;
        $lei = new leis();
        
        $dados['leis'] = $lei->getLeiPDF($id);
        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        
        foreach($dados['pdfs'] as $pd){ 
        foreach($dados['leis'] as $lei){ 

         if ($lei['id']== $pd['id_lei']){

        header("Content-Type: application/pdf");
        readfile("../painel/assets/pdfs/prods/".$pd['url']);
    }
}

}
}

}