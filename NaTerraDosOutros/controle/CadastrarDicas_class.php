<?php
	include_once("modelo/DicasDAO_class.php");
	include_once("modelo/Dicas_class.php");
	class CadastrarDicas{
	
		public function __construct(){
			
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Dicas();
				$c->setTitulo($_POST["titulo"]);
				$c->setConteudo($_POST["conteudo"]);
				$c->setDataPublicacao($_POST["data_publicacao"]);
                $c->setAutor($_POST["autor"]);

				$imagemNome = $_FILES["imagem"]["name"];
				$imagemCaminhoTemporario = $_FILES["imagem"]["tmp_name"];
				move_uploaded_file($imagemCaminhoTemporario, "img/{$imagemNome}");
				
				$c->setImagem("img/{$imagemNome}");

				//$d->setImagem($_POST["imagem"]);
				
				
				$dao = new DicasDAO();
				
				$dao->cadastrar($c);
				
				$status = "Cadastro de nova dica: " . $c->getTitulo() . 
				" efetuado com sucesso";
				
			} else{
			
				include_once("visao/formCadastroDicas.php");	
			
			}
		}
	}
?>