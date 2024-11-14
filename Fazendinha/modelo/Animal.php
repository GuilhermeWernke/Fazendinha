<?php
    
    class Animal
    {
        
        // Atributos
        
        // Atributos de Função dos Animais
        
        protected $nome;
        protected $idade;
        protected $genero;
        
        // Atributos de Função do Preço do Animal e do Leite
        
        protected $quantidade;
        protected $preco;
        
        protected $quantidadeLeite;
        protected $precoLeite;
        
        // Controle de Tempo
        
        protected $timeLeite;
        
        // Construtor
        
        public function __construct($nome, $idade, $genero, $quantidade, $preco, $quantidadeLeite, $precoLeite, $timeLeite)
        {
            
            $this->nome = $nome;
            $this->idade = $idade;
            $this->genero = $genero;
            
            $this->quantidade = $quantidade;
            $this->preco = $preco;
            
            $this->quantidadeLeite = $quantidadeLeite;
            $this->precoLeite = $precoLeite;
            
            $this->timeLeite = $timeLeite;
            
        }
        
        // GETS & SETS
        
    }
    
?>