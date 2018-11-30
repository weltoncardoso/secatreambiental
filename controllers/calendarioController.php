<?php

class calendarioController extends controller
{


	public function index() {

		$data = array();

		$this->loadView('calendario', $data);

		}
}
