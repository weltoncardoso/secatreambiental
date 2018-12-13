<?php
/**
* 
*/
class leisController extends controller
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

        $offset = (5 * ($dados['p']-1));
        
        $dados['limit_leis'] = $limit;
        $dados['total_leis_distritais'] = $lei->getTotalLeisDistritais();
        $dados['total_leis_federais'] = $lei->getTotalLeisFederais();
        $dados['total_leis_biografias'] = $lei->getTotalLeisBiografias();
        $dados['total_leis_outras'] = $lei->getTotalLeisOutras();

        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        $dados['leisdistritais'] = $lei->getLeisDistritais($offset, $limit);
        $dados['leisfederais'] = $lei->getLeisFederais($offset, $limit);
        $dados['leisbiografias'] = $lei->getLeisBiografias($offset, $limit);
        $dados['leisoutras'] = $lei->getLeisOutras($offset, $limit);

		$this->loadTemplate('leis', $dados);

		}
      public function view($id) {
        $dados = array(
            'leis' => array(),
            'pdfs' =>array()
        );

        
        $lei = new leis();
        
        $dados['leis'] = $lei->getLeiPDF($id);
    

        $dados['pdfs'] = $lei->getPdfs();
        
        foreach($dados['pdfs'] as $pd){ 
        foreach($dados['leis'] as $lei){ 
           


         if ($lei['id'] == $pd['id_lei']){
               
        header("Content-Type: application/pdf");
        readfile("./assets/pdfs/prods/".$pd['url']);
    } 
}

}
}

}