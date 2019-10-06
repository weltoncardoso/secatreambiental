<?php
class alunos_cursoController extends controller {
	
public function __construct() {
    parent::__construct();

    $usuarios = new Usuarios();
    if(!$usuarios->isLogged()) {
    header("Location: ".BASE."login");
  }
}
public function index() {
	$dados = array(
		'alunos' => array()
	);

	$alunos = new Alunos();
	$dados['alunos'] = $alunos->getAlunos_curso();

	$this->loadTemplate('alunos_curso', $dados);
}
}