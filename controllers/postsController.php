<?php
	
	class postsController extends controller {

		public function index() {
			echo "Lista das Postagens";
		}

		public function ver($url) {
			echo "O nome da Not�cia � " .$url; 
		}

	}

?>