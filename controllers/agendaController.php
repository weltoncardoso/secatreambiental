<?php

class agendaController extends controller
{


	public function index() {

		$data = array();

		$this->loadView('agenda', $data);

		}
}
