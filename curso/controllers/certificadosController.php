<?php

class cursoController extends controller
{

	
	public function index() {
			
		$data = array();
		
		$this->loadView('certificados', $data);

		}
}