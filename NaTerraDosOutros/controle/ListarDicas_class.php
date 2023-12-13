<?php
	include_once("modelo/DicasDAO_class.php");

	class ListarDicas{
	
		public function __construct(){
			//****** acessar o modelo
			$dao = new DicasDAO();

			//iniciou a conexão com o BD
			$lista = $dao->listar();
			
			//vou passar a lista para a visão
			//****** acessar a visão
			include_once("visao/listaDicas.php");
		}
	}
?>