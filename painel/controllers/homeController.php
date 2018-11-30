<?php
Class homeController extends controller {

    public function __construct() {
        parent::__construct();

        $adm = new Usuarios();
        if(!$adm->isLogged()) {
        	header("Location: ".BASE."login");
        }
    }

    public function index() {
        $dados = array();

        $this->loadTemplate('home', $dados);
    }

}