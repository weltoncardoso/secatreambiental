<?php 
class pagamentoController extends controller
{


	public function index() {

		$data = array();

		$this->loadView('pagamento', $data);

		}
}