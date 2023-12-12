<?php

	include_once("modelo/DicasDAO_class.php");
	
	class ExibirDicas{
	
		public function __construct(){
			
			$dao = new DicasDAO();
			$cont = $dao->exibir($_GET["id"]);
			include_once("visao/exibeDicas.php");	
			
		}
	}

?>
