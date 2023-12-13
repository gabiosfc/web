<?php

	include_once("ConnectionFactory_class.php"); //PDO
	include_once("Dicas_class.php"); //entidade
    
	class DicasDAO{
    //DAO - Data Access Object	
	//CRUD - Creat, Read, Update e Delete
	//operações básicas de banco de dados
	
		public $con = null; //obj recebe conexão
		//jdbc:postgresql://localhost:5433/task_controller?createDatabaseIfNotExist=true
		public function __construct(){
			$conF = new ConnectionFactory();
			$this->con = $conF->getConnection();
		}
        //cadastrar
		public function cadastrar($cont){
			try{
				$stmt = $this->con->prepare(
				"INSERT INTO dicas(titulo, conteudo, data_publicacao, imagem, autor)
				VALUES (:titulo, :conteudo, :data_publicacao, :imagem, :autor)");

				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":titulo", $cont->getTitulo());
				$stmt->bindValue(":conteudo", $cont->getConteudo());
				$stmt->bindValue(":data_publicacao", $cont->getDataPublicacao());
				$stmt->bindValue(":imagem", $cont->getImagem());
				$stmt->bindValue(":autor", $cont->getAutor());
				
				$stmt->execute(); //execução do SQL	
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

        //alterar
		public function alterar($cont){
			try{
				$stmt = $this->con->prepare(
				"UPDATE dicas SET titulo =:titulo,conteudo =:conteudo,data_publicacao=:datapublicacao,imagem=:imagem, autor =:autor
				WHERE id=:id");
				
				//ligamos as âncoras aos valores de Contato
				$stmt->bindValue(":titulo", $cont->getTitulo());
				$stmt->bindValue(":conteudo", $cont->getConteudo());
				$stmt->bindValue(":data_publicacao", $cont->getDataPublicacao());
				$stmt->bindValue(":imagem", $cont->getImagem());
				$stmt->bindValue(":autor", $cont->getAutor());
				$stmt->bindValue(":id", $cont->getId());
				
				$this->con->beginTransaction();
				//Inicia a transação
				//consistência ao banco
				//sem erros
				$stmt->execute(); //execução do SQL	
				$this->con->commit(); 
				//rollback - voltar atrás
				//commit - confirmação de tudo ok
				
				/*$this->con->close();
				$this->con = null;*/	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}

		//listar
		public function listar($query = null){
			//quando $consulta == null
			//listar todos os contatos do banco
			//consultar a tabela contato
			//para cada linha da tabela vou criar um obj contato
			//guardar o objeto em um array
			//essa função retorna uma lista
			//query em português é consulta
			
			try{
				if($query == null){
					$dados = $this->con->query("SELECT * FROM dicas");
				} else {
					$dados = $this->con->query($query);
				}
				
				/*$this->con->close();
				$this->con = null;*/
				
				$lista = array();
				
				foreach($dados as $linha){
					$c = new Dicas();
					$c->setId($linha["id"]);
					$c->setTitulo($linha["titulo"]);
					$c->setConteudo($linha["conteudo"]);
					$c->setAutor($linha["autor"]);
					$c->setDataPublicacao($linha["data_publicacao"]);
					$c->setImagem($linha["imagem"]);
					
					$lista[] = $c;
					//preenchendo um array com objetos Contato
				}
				
				return $lista;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
		}
		//exibir 
		public function exibir($id){			
			try{				
				$lista = $this->con->query("SELECT * FROM dicas WHERE id = " . $id);
				
				/*$this->con->close();
				$this->con = null;*/
				
				$dado = $lista->fetchAll(PDO::FETCH_ASSOC);
				
				$c = new Dicas();
				$c->setId($dado[0]["id"]);
				$c->setTitulo($dado[0]["titulo"]);
				$c->setConteudo($dado[0]["conteudo"]);
				$c->setDataPublicacao($dado[0]["data_publicacao"]);
				$c->setImagem($dado[0]["imagem"]);
				$c->setAutor($dado[0]["autor"]);
				
				return $c;	
			}
			catch(PDOException $ex){
				echo "Erro: " . $ex->getMessage();
			}
			
		}
    }
?>  