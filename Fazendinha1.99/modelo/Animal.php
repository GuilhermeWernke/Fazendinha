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
        
    }
    
?>