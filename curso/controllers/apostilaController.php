<?php 
class apostilaController extends controller
{


	public function index() {

		$data = array();

		$this->loadView('apostila', $data);

		}
}