<?php
	
	//Criando a Classe de Usuário, utilizando a herança de objetos da classe Model, presente no arquivo core.php
	class usuario extends model {
		//Declaração de variáveis
		private $nome;

		//Métodos de atribuição do nome do usuário
		public function setName($n){
			$this->nome = $n;
		}

		//Método de exibição do nome do usuário
		public function getName(){
			//Declaração de variável
			$array = array();
			//Comando SQL para realizar a busca de usuários no banco de dados
			$sql = "SELECT * FROM usuarios";
			//Execução do comando SQL no banco de dados
			$sql = $this->db->query($sql);
			//Verifica se o comando executado no banco de dados possui algum retorno
			if($sql->rowCount() > 0) {
				//Faz a atribuição das informações recebidas do banco de dados na variável $array
				$array = $sql->fetchAll();
			}
			//O método retorna as informações que foram adicionadas no Array
			return $array;
		}
	}

?>