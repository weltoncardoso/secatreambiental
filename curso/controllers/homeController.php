<?php
class homeController extends controller {
	
public function __construct() {
       parent::__construct();

        $alunos = new Alunos();
        if(!$alunos->isLogged()) {
        	header("Location: ".BASE."login");
        	
        }

}
public function index() {

			$dados = array(
				'info' => array(),
				'cursos' => array()
			);


			$alunos = new Alunos();
			$alunos->setAluno($_SESSION['lgaluno']);
			$dados['info'] = $alunos;

			$cursos = new Cursos();
			$dados['cursos'] = $cursos->getCursosDoAluno($alunos->getId());

		// 	$dados['aluno'] = $alunos->getAluno($alunos->getId());
		// 	$horaBanco = $dados['aluno']['date_cadastro'];
		// 	$horaADD = date('Y/m/d', strtotime("+10 days",strtotime($horaBanco)));
		// 	$horaAtual =  date("Y/m/d");
		// 	if($horaAtual <= $horaADD){
  //       	$this->loadTemplate('home', $dados);
  //           }else{
		// 		$this->loadView('403', $dados);

		// }

		$this->loadTemplate('home', $dados);
	}
}