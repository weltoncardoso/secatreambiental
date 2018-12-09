<?php
/**
* 
*/
class clientesController extends controller
{

	public function __construct() {
       parent::__construct();
        	
        }
	
	public function index() {
			
		$data = array();
		    $cli = new clientes();
             
                $limit2 = 7;
                $offset2 = 0;
                $data['p'] = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])){
                    $data['p'] = intval($_GET['p']);
                    if($data['p'] == 0){
                        $data['p'] = 1;
                    }
                }

        $offset2 = (7 * ($data['p']-1));
        $data['limit_clientes'] = $limit2;
        $data['total_clientes'] = $cli->getTotalClientes();
        // $data['images'] = $cli->getImagem($offset2, $limit2);
        $data['clientes'] = $cli->getClientes($offset2, $limit2);
        $data['clientesDF'] = $cli->getClientesDF();
        $data['clientesGO'] = $cli->getClientesGO();
        $data['clientesTO'] = $cli->getClientesTO();
        $data['clientesBA'] = $cli->getClientesBA();
        $data['clientesSE'] = $cli->getClientesSE();
        $data['clientesPE'] = $cli->getClientesPE();
        $data['clientesAL'] = $cli->getClientesAL();
        $data['clientesRN'] = $cli->getClientesRN();
        $data['clientesCE'] = $cli->getClientesCE();
        $data['clientesPI'] = $cli->getClientesPI();
        $data['clientesMA'] = $cli->getClientesMA();
        $data['clientesAP'] = $cli->getClientesAP();
        $data['clientesPA'] = $cli->getClientesPA();
        $data['clientesRR'] = $cli->getClientesRR();
        $data['clientesAM'] = $cli->getClientesAM();
        $data['clientesAC'] = $cli->getClientesAC();
        $data['clientesRO'] = $cli->getClientesRO();
        $data['clientesMT'] = $cli->getClientesMT();
        $data['clientesMS'] = $cli->getClientesMS();
        $data['clientesPR'] = $cli->getClientesPR();
        $data['clientesSC'] = $cli->getClientesSC();
        $data['clientesRS'] = $cli->getClientesRS();
        $data['clientesSP'] = $cli->getClientesSP();
        $data['clientesMG'] = $cli->getClientesMG();
        $data['clientesRJ'] = $cli->getClientesRJ();
        $data['clientesES'] = $cli->getClientesES();
        $data['clientesPB'] = $cli->getClientesPB();


		$this->loadView('clientes', $data);

		}
}