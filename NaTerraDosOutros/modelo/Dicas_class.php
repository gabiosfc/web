<?php
    class Dicas{

        private $id;
        private $titulo;
        private $conteudo;
        private $data_publicacao;
        private $imagem;
		private $autor;

        public function __contruct(){
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;    
        }

        public function setConteudo($conteudo){
            $this->conteudo = $conteudo;    
        }
        public function setDataPublicacao($data_publicacao){
            $this->data_publicacao = $data_publicacao;    
        }
        public function setImagem($imagem){
            $this->imagem = $imagem;    
        }
		public function setAutor($autor){
            $this->autor = $autor;    
        }

        public function getId(){
            return $this->id;
        }

        public function getTitulo(){
            return $this->titulo;    
        }

        public function getConteudo(){
            return $this->conteudo;   
        }
        public function getDataPublicacao(){
            return $this->data_publicacao;    
        }
        public function getImagem(){
            return $this->imagem;    
        }
		public function getAutor(){
            return $this->autor;    
        }
    }
?>