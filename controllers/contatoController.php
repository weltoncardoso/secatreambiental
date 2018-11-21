<?php
/**
* 
*/
class contatoController extends controller
{

    public function __construct() {
       parent::__construct();
            
        }
    
    public function index() {
            
        $data = array();
   

        $this->loadTemplate('contato', $data);

        }
}