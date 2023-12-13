<?php
session_start();
 include_once("./visao/topo.php");
//ROTEADOR

	//GET -> função que deixa variáveis explicitas na URL
	//recebe o comportamento que será executado por GET
	//array chamado $_GET e os índices são as variáveis
	//localhost/agenda/contato.php?fun=alterar
	
	
	if(isset($_GET["fun"])){
		//is + set => é setado? T Está vazio? F
	
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			
			include_once("./controle/CadastrarDicas_class.php");
			$pag = new CadastrarDicas();
			
		} elseif($fun == "listar"){
			include_once("./controle/ListarDicas_class.php");
			$pag = new ListarDicas();
			
		}  elseif($fun == "exibir") {
			include_once("controle/ExibirDicas_class.php");
			$pag = new ExibirDicas();
			
		} else {
			include_once("controle/ListarDicas_class.php");
			$pag = new ListarDicas();			
		}
		
		
	} else {
		include_once("controle/ListarDicas_class.php");
		$pag = new ListarDicas();
	}
?>