<?php
    
    class Animal
    {
        
        // Atributos
        
        // Atributos de Função dos Animais
        
        protected $ID;
        protected $nome;
        protected $idade;
        protected $genero;
        
        protected $preco;
        
        // Construtor
        
        public function __construct($ID, $nome, $idade, $genero, $preco)
        {
            $this->ID = $ID;
            $this->nome = $nome;
            $this->idade = $idade;
            $this->genero = $genero;
            $this->preco = $preco;
        }
        
        // GETS & SETS
        
        public function getID()
        {
            
            return $this->ID;
            
        }
        
        public function setID($ID)
        {
            
            $this->ID = $ID;
            
        }
        
        public function getNome()
        {
            
            return $this->nome;
            
        }
        
        public function setNome($nome)
        {
            
            $this->nome = $nome;
            
        }
        
        public function getIdade()
        {
            
            return $this->idade;
            
        }
        
        public function setIdade($idade)
        {
            
            $this->idade = $idade;
            
        }
        
        public function getGenero()
        {
            
            return $this->genero;
            
        }
        
        public function setGenero($genero)
        {
            
            $this->genero = $genero;
            
        }
        
        public function getPreco()
        {
            
            return $this->preco;
            
        }
        
        public function setPreco($preco)
        {
            
            $this->preco = $preco;
            
        }
        
        // Métodos
        
        
        
    }
    
?>