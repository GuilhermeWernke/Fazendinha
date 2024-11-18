<?php
    
    require_once ('IStatus.php');
    
    class Jogador implements IStatus
    {
        
        // Atributos do jogador
        
        private $nome;
        private $dinheiro;
        private $energia; 
        
        
        
        // Atributos do inventário do jogador
        
        private $leite = 0;
        
        
        
        // GETS & SETS
        
        public function getNome()
        {
            
            return $this->nome;
            
        }
        
        public function setNome($nome)
        {
            
            $this->nome = $nome;
            
        }
        
        public function getDinheiro()
        {
            
            return $this->dinheiro;
            
        }
        
        public function setDinheiro($dinheiro)
        {
            
            $this->dinheiro = $dinheiro;
            
        }
        
        public function getEnergia()
        {
            
            return $this->energia;
            
        }
        
        public function setEnergia($energia)
        {
            
            $this->energia = $energia;
            
        }
        
        public function getLeite()
        {
            
            return $this->leite;
            
        }
        
        public function setLeite($leite)
        {
            
            $this->leite = $leite;
            
        }
        
        
        
        // Interface
        
        public function getStatus()
        {
            
            return " Nome: " . $this->nome . "\n Dinheiro: " . $this->dinheiro . "\n Energia: " . $this->energia . "\n Litros de Leite: " . $this->leite . "\n";
            
        }      
        
    }
    
?>