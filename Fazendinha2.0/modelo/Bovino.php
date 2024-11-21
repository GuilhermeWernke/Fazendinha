<?php
    
    require_once ('Animal.php');
    
    class Bovino extends Animal implements IStatus
    {
        
        // Atributos
        
        private $timeLeite = 0;
        private $timeAcasalar = 0;
        
        // Construtor
        
        public function __construct($ID, $nome, $idade, $genero, $preco, $timeLeite, $timeAcasalar)
        {
            
            parent::__construct($ID, $nome, $idade, $genero, $preco);
            // chamando o construtor do Animal (Petrus, brincadeira fessor!)
            
            $this->timeLeite = $timeLeite;
            $this->timeAcasalar = $timeAcasalar;
            
            
        }
        
        // Interface
        
        public function getStatus()
        {
            
            return " ID: " . $this->getID() . "\n Nome: " . $this->getNome() .  "\n Idade: " . $this->getIdade() . " anos \n Gênero: " . $this->getGenero() . "\n Preço: " . $this->getPreco() .  "\n\n";
            
        }
        
        // Métodos
        
        // GETTS & SETTS
        
        public function getTimeLeite()
        {
            
            return $this->timeLeite;
            
        }
        
        public function setTimeLeite($timeLeite)
        {
            
            $this->timeLeite = $timeLeite;
            
        }
        
        public function getTimeAcasalar()
        {
            
            return $this->timeAcasalar;
            
        }
        
        public function setTimeAcasalar($timeAcasalar)
        {
            
            $this->timeAcasalar = $timeAcasalar;
            
        }
        
    }
    
?>