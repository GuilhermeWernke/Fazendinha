<?php
    
    // require_onces
    
    require_once ('modelo/Animal.php');
    require_once ('modelo/Bovino.php');
    require_once ('modelo/Equineo.php');
    
	//números de performance do jogo
    
    $opcao = "0";
    
    $comecar_jogo = 0;
    $sair_voltar = 0;
    
    $bovinos = 
    [
        new Bovino("Ferdinando", 7, "M", 1000),
        new Bovino("Mimosa", 10, "F", 1200)
    ];
    
    function cadastrarBovino($nome, $idade, $genero, $preco) 
    {
        
        global $bovinos;
        
        $id = count($bovinos) + 1;
        
        $novoBovino = new Bovino($nome, $idade, $genero, $preco);
        $novoBovino->setID($id);
        $bovinos[] = $novoBovino;
        
    }
    
    while(!($opcao >= 1 and $opcao <= 2))
    {
        echo("╔═══════════════════════════════════════════════════════════╗ \n");
        echo("║           Olá,  seja bem vindo ao nosso jogo!             ║ \n");
        echo("║                                                           ║ \n");
        echo("║                    Escolha uma opção:                     ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     1_ Iniciar jogo                       ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     2_ Sair/Voltar                        ║ \n");
        echo("║                                                           ║ \n");
        echo("╚═══════════════════════════════════════════════════════════╝ \n");
        
        $opcao = readline("");
        if(!($opcao >= 1 and $opcao <= 2)) 
        {
            
            echo("Valor informado está errado!\n");
            sleep(1);
            
        }
        
        switch($opcao)
        {
            
            case  1:
                
                comercarJogo();
                
            break;
            
            case  2:
                
                finalll();
                
            break;
        }//switch
        
    }
    
    
    
    
	function comercarJogo($opcao)
    {
        
        $numeroDias = 0;
        
		for($numeroDias = 0; $numeroDias < 100; $numeroDias++)
        {
            
			
			
			$energia = 100;
			$dormir = 0;
            
            $dinheiro = 0.0;
            
			// FomeAnimais($racao_vaca);
			// FomeAnimais($racao_torro);
			// FomeAnimais($racao_jegue);
			// FomeAnimais($racao_jumenta);
			
			if($numeroDias == 0 )
            {
				;
				echo
                ("
                A história começa no começo dos anos 40, \n
                quando a segunda Guerra Mundial começou.
                ");
				echo("
                Você vive na Suíça, tentando ganhar dinheiro com sua fazenda, \n
                já que a situação do mundo não ajuda a sua condição financeira.
                ");
				echo("Atualmente, você tem tentado lucrar com ifus animais, vendendo leite de vaca, carne de boi...");
				echo("Porém, você é pobre e precisa urgentemente trabalhar para conseguir sobreviver.");
				echo("Boa Sorte!");
				
			}//if
            
            mercado_inicio($energia, $dormir, $dinheiro, $opcao);
			
		} // for
        
		if($dinheiro<500)
        {
            
			echo("Você morreu pobre");
            
		}
		elseif($dinheiro<1000)
        {
            
			echo("Você morreu mas teve uma vida médiana");
            
		}
		elseif($dinheiro>=10000)
        {
            
			echo("Você teve uma vida de luxo");
            
		}
        else
        {
            
            echo("Você morreu mas teve uma vida boa");
            
        }
        
		finall();
        
	} // fim da function comercarJogo
    
    
	function mercado_inicio(&$energia, &$dormir, &$dinheiro, &$opcao)
    {
        
		while($energia > 0 and $dormir == 0)
        {
            
            while(!($opcao >= 1 and $opcao <=5))
            {
                
                echo("╔═══════════════════════════════════════════════════════════╗ \n");
                echo("║                                                           ║ \n");
                echo("║                O que deseja fazer hoje?                   ║ \n");
                echo("║                                                           ║ \n");
                echo("║                    Escolha uma opção:                     ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     1_ Mercado                            ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     2_ Animais                            ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     3_ Vender                             ║ \n");
                echo("║                                                           ║ \n");
                echo("║                     0_ Dormir                             ║ \n");
                echo("║                                                           ║ \n");
                echo("╚═══════════════════════════════════════════════════════════╝ \n");
                $opcao = readline("");
                
                if(!($opcao >= 1 and $opcao <=5))
                {
                    
                    $opcao = $opcao;
                    break;
                    
                }
                else
                {
                    
                    echo("Valor informado está errado!\n");
                    
                }
            }
            switch($opcao)
            {
                
                case 1:
                    
                    Mercado($energia, $dormir, $dinheiro, $opcao);
                    
                break;
                
                case 2:
                    
                    Animais($energia, $dormir, $dinheiro, $opcao);
                    
                break;
                
                case 3:
                    
                    Venda($energia, $dormir, $dinheiro, $opcao);
                    
                break;
                
                case 0:
                    
                    $dormir += 1;
                    
                break;
                
            }//switch açoes do dia
            
        }//energia
	}//function mercado_inicio
    
	function Mercado(&$energia, &$dormir, &$dinheiro, &$opcao)
    {
        while(!($opcao >= 1 and $opcao <=4))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Escolha o que deseja comprar                ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Animais                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Alimento                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Sementes                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(!($opcao >= 1 and $opcao <=4))
            {
                $opcao = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
        
        switch($opcao)
        {
            case 1: 
                MercadoAnimais();   
            break;
            
            case 2: 
                MercadoAlimento();  
            break;

            case 3: 
                Mercadoifmente();   
            break;

            case 4: 
                    mercado_inicio();   
            break;
        }//switch mercado
	}//function Mercado

    function MercadoAnimais(&$energia, &$dormir, &$dinheiro, &$opcao)
    {   
        while(!($opcao >= 1 and $opcao <=5))
        {   
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║              Escolha um animal para comprar:              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      1_ Vaca                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      2_ Torro                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      3_ Jegue                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      4_ Jumenta                           ║ \n");
            echo("║                                                           ║ \n");							
            echo("║                      5_ Voltar                            ║ \n");							
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(!($opcao >= 1 and $opcao <=5))
            {   
                $opcao = $opcao;
                break;  
            }
            else
            {   
                echo("Valor informado está errado!\n"); 
            }
        }
    
        switch($opcao)
        {
            case 1: 
                AbreviarMercado($valor_vaca, $vaca);    
            break;
            
            case 2: 
                AbreviarMercado($valor_torro, $touro);  
            break;
            
            case 3: 
                AbreviarMercado($valor_jegue, $jegue);  
            break;
                                    
            case 4: 
                AbreviarMercado($valor_jumenta, $jumenta);  
            break;

            case 5: 
                    Mercado();  
            break;
        }// fim da switch animal
    } //fim da function MercadoAnimais
    
    
    
	function Venda(&$energia, &$dormir, &$dinheiro, &$opcao)
    {
		while(!($opcao >= 1 and $opcao <=4))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║                Escolha o que deseja vender                ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Animais                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Alimento                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Sementes                           ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     0_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(!($opcao >= 1 and $opcao <=4))
            {
                $opcao = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
        
        switch($opcao)
        {
            case 1:
                
                VendaAnimais();
                
            break;
            
            case 2:
                
                VendaAlimento();
                
            break;
            
            
            case 0:
                
                mercado_inicio();
                
            break;
            
        }
	}//function Venda
    
    
    
    function VendaAnimais(&$energia, &$dormir, &$dinheiro, &$opcao)
    {
        while(!($opcao >= 1 and $opcao <=5))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║              Escolha um animal para vender:               ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ vaca                               ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     2_ Torro                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     3_ Jegue                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     4_ Jumenta                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     0_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if(!($opcao >= 1 and $opcao <=5))
            {
                $opcao = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
        
        switch($opcao)
        {
            case 1:
                AbreviarVenda($valor_vaca, $vaca);
            break;
            
            case 2:
                AbreviarVenda($valor_torro, $touro);
            break;
            
            case 3:
                AbreviarVenda($valor_jegue, $jegue);
            break;
            
            case 4:
                AbreviarVenda($valor_jumenta, $jumenta);
            break;
            
            case 0:
                Venda();
                
        }// fim da switch animal
        
    }//function VendaAnimais
    
    
    
	function Animais(&$energia, &$dormir, &$dinheiro, &$opcao)
    {
        while(!($opcao >= 1 and $opcao <=5))
        { 
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Qual animal deseja administrar              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     Escolha uma opção:                    ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      1_ Vaca                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      2_ Touro                             ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      0_ Voltar                            ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            
            if($opcao >= 1 and $opcao <= 5)
            {
                $opcao = $opcao;
                break;
            }
            else
            {
                echo("Valor informado está errado!\n");
            }
        }
            
            switch($opcao)
            {
                case 1:
                
                    while($opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                           Vaca                            ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      1_ Olhar Status                      ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                         2_ Nomear                         ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       3_ Tirar leite                      ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                          0_ Voltar                        ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                        
                        if($opcao >= 1 and $opcao <= 3)
                        {
                            $opcao = $opcao;
                            break;
                        }
                        else
                        {
                            echo("Valor informado está errado!\n");
                        }
                    }
                
                    switch($opcao)
                    {
                        
                        case 1:
                            
                            Status($vaca);
                            
                        break;
                        
                        case 2:
                            
                            $opcao = readline("Qual vaca deseja mudar o nome? \n");
                            
                            Nomear($vaca);
                            
                        break;
                        
                        case 3:
                            
                            Leite($vaca_alimentada, $time_leite_vaca, $leite_vaca, $vaca);
                            
                        break;
                        
                        case 0:
                            
                            Animais();
                            
                        break;
                    }// switch $vaca
                break;
                
                case 2:
                
                    while($opcao >= 1 and $opcao <= 3)
                    {
                        echo("╔═══════════════════════════════════════════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                          Touro                            ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      1_ Alimentar                         ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       2_ Cruzar                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       0_ Voltar                           ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao = readline("");
                        
                        if($opcao >= 1 and $opcao <= 3)
                        {
                            $opcao = $opcao;
                            break;
                        }
                        else{
                            echo("Valor informado está errado!\n");
                        }
                    }
                    switch($opcao){
                        case 1:
                            AlimentarAnimais($touro_alimentado, $racao_cara, $racao_media, $racao_barata);
                        break;
                        
                        case 2:
                            Reproduzir($time_fazer_bebe_vaca, $bebe_vaca, $touro_alimentado, $touro, $vaca);
                        break;
                        
                        case 0:
                            Animais();
                        break;
                    }//switch torro
                break;
                
                case 0:
                    mercado_inicio();
                break;
            
            }//administrar animais
	}//function Animais
    
    function Status($x)
    {
        
        if($x->getNome() == "")
        {
            
            echo("Número: " . $x->getID() . "\n");
            
        }
        else
        {
            
            echo("Nome: " . $x->getNome() . "\n");
            echo("Número: " . $x->getID() . "\n");
            
        }
        
        echo("Idade: " . $x->getIdade() . "\n");
        echo("Genero: " . $x->getGenero() . "\n");
        echo("Preço: " . $x->getPreco() . "\n");
        echo("\n");
        
    }
    
    function Nomear($x)
    {
        
        echo("Digite o nome do animal: \n");
        $nome = readline();
        $x->setNome($nome);
        echo("Nome do animal alterado com sucesso!\n");
        
    }
    
    function Reproduzir($time, $bebe, $racao, $touroo, $vacaa)
    {
        
        $
        
    }//function reproduzir
    
    function Leite($a, $x, $y, $z)
    {
        if($x <= 0 and $z > 0)
        {
            $y = $a * $y + $z;
            $x++;
            echo("Leite tirado com sucesso!\n");
        }
        else{
            echo("Já tiror leite de todas as $vacas!\n");
        }
    }   
    
    function AbreviarMercado($x, $y)
    {
        
        echo("Quantos animais você deseja comprar? \n");
        $quantidade = readline();
        echo("Compra reultará em: " . $quantidade * $x);
        echo("\n deseja comprar? \n");
        echo("1_  sim \n");
        echo("2_  não \n");
        $opcao = readline("");
        
        while($opcao >= 1 and $opcao <= 2)
        {
            if($opcao >= 1 and $opcao <= 2)
            {
                $opcao = $opcao;
                break;
            }
            else{
                echo("Valor informado está errado!\n");
            }
        }
        
        
        switch($opcao)
        {
            case 1:
                if($quantidade * $x <= $dinheiro and $energia >= 15)
                {
                    
                    $y = $y + $quantidade;
                    $energia = $energia - 15;
                    $dinheiro = $dinheiro - ($quantidade * $x);
                    echo("Compra realizada com sucesso!\n");
                }
                else if(energia < 15)
                {
                    
                    echo("Compra negada, energia baixa!\n");
                }
                else
                {
                    
                    echo("Compra negada\n");
                }
                break;
            case 2:
                
                echo("if é o que deseja\n");
                
        }//fim switch compra
    
    }//function AbreviarMercado
    
	function AbreviarVenda($x, $y)
    {
        
        echo("Quantos animais você deseja vender? \n");
        $quantidade = readline();
        echo("Venda reultará em: " . $quantidade * $x);
        echo("\n deseja comprar? \n");
        echo("1_  sim \n");
        echo("2_  não \n");
        $opcao = readline("");
        
        while($opcao >= 1 and $opcao <= 2)
        {
            if($opcao >= 1 and $opcao <= 2)
            {
                $opcao = $opcao;
                break;
            }
            else{
                echo("Valor informado está errado!\n");
            }
        }
        
        
        switch($opcao)
        {
            case 1:
                if($quantidade >= $x and $energia >= 15)
                {
                    
                    $y = $y - $quantidade;
                    $energia = $energia - 15;
                    $dinheiro = $dinheiro + ($quantidade * $x);
                    echo("Venda realizada com sucesso!\n");
                }
                elseif($energia < 15){
                    
                    echo("Venda negada, energia baixa!\n");
                }
                else
                {
                    
                    echo("Venda negada\n");
                }
                break;
            case 2:
                
                echo("Venda negada\n");
                
        }//fim switch compra
		
	}//function AbreviarVenda
	
	function finall()
    {
        
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        
	}
    
    function finalll()
    {
        
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┐┌ ┌─┐ ┌─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘ │││ ├─┤ │ │  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─ ┘└┘ ┴ ┴ └─┘  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        
	}
    
    // ╔════╦══════╦══╗
    // ╠═══╗║╠═══╦╗║╚╗║
    // ║╔═╗╬╠═╦═╣║║╚╚║║
    // ║╚╗╠╚╦║║╔═╣╚═╦╝║
    // ║║║╝╔═╩╝║╠╝╣╔╝╔╣
    // ║║╚═╣╔══╣╔═╝║╩╣║
    // ║╚═╗╚╝╣║╝║╝═╩╔╩║
    // ╚══╩══╩══╩═════╝
    
    // ═ ╔ ╦ ╗ ╚ ╩ ╝ ╠  ╬ ╣ ║
	
//programa 
?>