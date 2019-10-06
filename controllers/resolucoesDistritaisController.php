<?php

class resolucoesDistritaisController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
      $dados = array();
        $lei = new leis();
                $limit = 7;
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
        $dados['total_resolucoes_distritais'] = $lei->getTotalResolucoesDistritais();


        $dados['pdfs'] = $lei->getPdfs($offset, $limit);
        $dados['resolucoesdistritais'] = $lei->getResolucoesDistritais($offset, $limit);

		$this->loadTemplate('resolucoesDistritais', $dados);

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