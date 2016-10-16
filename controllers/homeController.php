<?php

	class homeController extends controller {
		
		public function index() {
			$usuario = new usuario();
			$dados['usuario'] = $usuario->getName();


			$this->loadTemplate('home', $dados);
			//echo "Meu Nome é " .$usuario->getName();
		}

		public function sobre() {
			$dados = array();
			$this->loadTemplate('sobre', $dados);
		}
	}

?>