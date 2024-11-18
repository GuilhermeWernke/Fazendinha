<?php
    
    require_once ('modelo/IStatus.php');
    require_once ('modelo/Bovino.php');
    require_once ('modelo/Animal.php');
    
    
    $variavel = "Bovino";
    
    $boi = new $variavel(0, "Boi", 5, "M", 1000, 0, 0);
    
    echo $boi->getStatus();
    
?>