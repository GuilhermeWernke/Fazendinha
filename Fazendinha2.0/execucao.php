<?php
    
    
    
    
    system('clear');
    
    require_once ('modelo/Jogador.php');
    require_once ('modelo/Animal.php');
    require_once ('modelo/Bovino.php');
    
    
    
    
    
    function comercarJogo(&$opcao, &$jogador)
    {
        
        global $dias;
        
        $dormir = 0;
        
        $bovinos = CriarObjetos("Bovino", 2, 2);
        
        for($dias = 0; $dias < 30; $dias++)
        {
            
            $jogador->setEnergia = 100;
            $dormir = 0;
            
            while($jogador->getEnergia() > 0 and $dormir == 0)
            {
                
                $dormir = MenuPrincipal($jogador, $bovinos, $dias);
                
            } // energia
            
        } // dias
        
        finall();
        
    } // function comercarJogo
    
    function MenuPrincipal(&$jogador, &$bovinos)
    {
        
        $opcao = 999;
        
        while(!($opcao >= 0 and $opcao <=3))
        {
            
            echo("╔═══════════════╣O que deseja fazer hoje?╠════════════════╗ \n");
            echo("║                                                         ║ \n");
            echo("║                    Escolha uma opção:                   ║ \n");
            echo("║                                                         ║ \n");
            echo("║                       1_ Mercado                        ║ \n");
            echo("║                                                         ║ \n");
            echo("║                       2_ Animais                        ║ \n");
            echo("║                                                         ║ \n");
            echo("║                       3_ Vender                         ║ \n");
            echo("║                                                         ║ \n");
            echo("║                      4_ Ver Status                      ║ \n");
            echo("║                                                         ║ \n");
            echo("║                        0_ Dormir                        ║ \n");
            echo("╚═════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if(!($opcao >= 0 and $opcao <=4))
            {
                
                echo("Valor informado está errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            else
            {
                
                break;
                
            }
            
        }
        
        switch($opcao)
        {
            
            case 1:
                
                Mercado($jogador, $bovinos);
                
            break;
            
            case 2:
                
                Animais($jogador, $bovinos);
                
            break;
            
            case 3:
                
                Venda($jogador, $bovinos);
                
            break;
            
            case 4:
                
                echo("\n Dia: " . $GLOBALS["dias"] . "\n");
                // estou usando a variável global para pegar o valor de dias, pois não consegui passar o valor de dias para a função MenuPrincipal pq ia ter q mudar em mt lugar e bateu a preguiça
                echo($jogador->getStatus());
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            break;
            
            case 0:
                
                return 1;
                
            break;
            
        } // switch açoes do dia
        
    } // function MenuPrincipal
    
    function Mercado(&$jogador, &$bovinos)
    {
        
        $opcao = 999;
        
        
        while(!($opcao >= 0 and $opcao <=1))
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║               Escolha o que deseja comprar                ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     1_ Animais                            ║ \n");
            echo("║                                                           ║ \n");
            echo("║                     0_ Voltar                             ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if(!($opcao >= 0 and $opcao <=1))
            {
                
                echo("Valor informado está errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            else
            {
                
                break;
                
            }
            
        }
        
        switch($opcao)
        {
            case 1: 
                
                MercadoAnimais($jogador, $bovinos);   
                
            break;
            
            case 4: 
                
                MenuPrincipal($jogador, $bovinos); 
                
            break;
            
        }//switch mercado
        
    } // function Mercado
    
    function MercadoAnimais(&$jogador, &$bovinos)
    {   
        
        $opcao = 999;
        
        $bovinosLoja = CriarObjetos("Bovino", rand(5,15), rand(0, 20));
        $bovinosLoja[0]->getStatus();
        
        while(!($opcao >= 0 and $opcao <=2))
        {   
            echo("╔═══════════════════════════════════════════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║              Escolha um animal para comprar:              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      1_ Vaca                              ║ \n");
            echo("║                                                           ║ \n");
            echo("║                      2_ Touro                             ║ \n");
            echo("║                                                           ║ \n");							
            echo("║                      0_ Voltar                            ║ \n");							
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if (!($opcao >= 0 and $opcao <=2))
            {
                
                echo("Valor informado está errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            else
            {
                
                break;
                
            }
        }
        
        switch($opcao)
        {
            case 1: 
                
                ComprarAnimais($jogador, $bovinos, $bovinosLoja, "F");
                
            break;
            
            case 2: 
                
                ComprarAnimais($jogador, $bovinos, $bovinosLoja, "M");
                
            break;
            
            case 0: 
                
                Mercado($jogador, $bovinos); 
                
            break;
            
        } // switch mercado animais
        
    } // function MercadoAnimais
    
    function ComprarAnimais(&$jogador, &$animais, &$animaisLoja, $sexo)
    {
        
        $animalEncontrado = 0;
        
        echo("Digite o ID do animal que deseja comprar: \n\n");
        
        foreach($animaisLoja as $animal)
        {
            
            if($animal->getGenero() == $sexo)
            {
                
                $animal->getStatus();
                // Apenas para testar se está listando os animais corretamente, nota: não está listando corretamente nesta parte do código, por isso usei o print_r abaixo
                print_r($animal);
                
            }
            
        }
        
        $opcao = readline("");
        system('clear');
        
        foreach($animaisLoja as $animal)
        {
            
            if(($animal->getID() == $opcao) and ($animal->getGenero() == $sexo))
            {
                
                echo("Este animal vai-lhe custar: " . $animal->getPreco() .  " reais \n");
                $opcao = readline("Deseja comprar? 1_ Sim 0_ Não \n");
                $animalEncontrado = 1;
                system('clear');
                
                if("1" == $opcao)
                {
                    
                    $jogador->setDinheiro($jogador->getDinheiro() - $animal->getPreco());
                    array_push($animais, $animal);
                    $animal->setID(count($animais) -1);
                    echo("Compra realizada com sucesso!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                else
                {
                    
                    echo("Compra cancelada!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                
            }
            
        }
        
        if($animalEncontrado == 0)
        {
            
            echo("ID informado está errado!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            
        }
        
    } // function ComprarAnimais
    
    function Animais(&$jogador, $bovinos)
    {
        
        $opcao1 = 999;
        $opcao2 = 999;
        
        while(!($opcao1 >= 0 and $opcao1 <= 1))
        {
            
            echo("╔═════════════════════╣Escolha o Animal╠════════════════════╗ \n");
            echo("║                                                           ║ \n");
            echo("║                     Escolha uma opção:                    ║ \n");
            echo("║                                                           ║ \n");
            echo("║                        1_ Bovinos                         ║ \n");
            echo("║                                                           ║ \n");
            echo("║                         0_ Voltar                         ║ \n");
            echo("║                                                           ║ \n");
            echo("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao1 = readline("");
            system('clear');
            
            if(!($opcao1 >= 0 and $opcao1 <= 1)) 
            {
                
                echo("Valor informado está errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            
            switch($opcao1)
            {
                
                case  1:
                    
                    while(!($opcao2 >= 0 and $opcao2 <= 4))
                    {
                        
                        echo("╔═══════════════════╣O que Deseja Fazer╠════════════════════╗ \n");
                        echo("║                                                           ║ \n");
                        echo("║                    Escolha uma opção:                     ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       1_ Ver Status                       ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                         2_ Nomear                         ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                      3_ Tirar Leite                       ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                       4_ Reproduzir                       ║ \n");
                        echo("║                                                           ║ \n");
                        echo("║                         0_ Voltar                         ║ \n");
                        echo("║                                                           ║ \n");
                        echo("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao2 = readline("");
                        system('clear');
                        
                        if(!($opcao2 >= 0 and $opcao2 <= 4)) 
                        {
                            
                            echo("Valor informado está errado!\n");
                            $continuar = readline("Pressione enter para continuar...");
                            system('clear');
                            
                        }
                        
                        switch($opcao2)
                        {
                            
                            case  1:
                                
                                foreach($bovinos as $bovino)
                                {
                                    
                                    echo($bovino->getStatus()."\n");
                                    
                                }
                                
                                $continuar = readline("Pressione enter para continuar...");
                                system('clear');
                                
                            break;
                            
                            case  2:
                                
                                echo("Digite o ID do animal que deseja mudar o nome: \n\n");
                                listarObjetos($bovinos);
                                $opcao2 = readline("");
                                system('clear');
                                
                                foreach($bovinos as $bovino)
                                {
                                    
                                    if($bovino->getID() == $opcao2)
                                    {
                                        
                                        $bovino->setNome(readline("Digite o novo nome: "));
                                        system('clear');
                                        
                                    }
                                    
                                }
                                
                            break;
                            
                            case  3:
                                
                                echo("Digite o ID do animal que deseja tirar leite: \n\n");
                                listarObjetos($bovinos);
                                $opcao2 = readline("");
                                system('clear');
                                
                                foreach($bovinos as $bovino)
                                {
                                    
                                    if($bovino->getID() == $opcao2)
                                    {
                                        
                                        if($bovino->getGenero() == "F")
                                        {
                                            
                                            if($bovino->getTimeLeite() == 0)
                                            {
                                                
                                                $bovino->setTimeLeite(1);
                                                $jogador->setLeite($jogador->getLeite() + rand(5, 20));
                                                $jogador->setEnergia($jogador->getEnergia() - 10);
                                                echo("Leite tirado com sucesso!\n");
                                                $continuar = readline("Pressione enter para continuar...");
                                                system('clear');
                                                break;
                                                
                                            }
                                            else
                                            {
                                                
                                                echo("Animal precisa de tempo para ser ordenhado!\n");
                                                $continuar = readline("Pressione enter para continuar...");
                                                system('clear');
                                                break;
                                                
                                            }
                                            
                                        }
                                        else
                                        {
                                            
                                            echo("Animal macho não pode ser ordenhado!\n");
                                            $continuar = readline("Pressione enter para continuar...");
                                            system('clear');
                                            break;
                                            
                                        }
                                        
                                    }
                                    else
                                    {
                                        
                                        echo("Animal não encontrado!\n");
                                        $continuar = readline("Pressione enter para continuar...");
                                        system('clear');
                                        break;
                                        
                                    }
                                    
                                }
                                
                            break;
                            
                            case  4:
                                
                                Acasalar("Bovino", $bovinos, $jogador);
                                
                            break;
                            
                            case 0;
                                
                                Animais($jogador, $bovinos);
                                
                            break;
                            
                        }//switch
                        
                    }
                    
                break;
                
                case  0:
                    
                    MenuPrincipal($jogador, $bovinos);
                    
                break;
                
            }//switch
            
        }
        
    } // function Animais
    
    function Venda()
    {
        
        $opcao = 0;
        
        while(!($opcao >= 0 and $opcao <= 3))
        {
            
            // trabalhando nisso
            
        }
        
    } // function Venda
    
    function Acasalar($classe, &$arrayAnimais, &$jogador)
    {
        
        $machoID = 0;
        $femeaID = 0;
        
        echo("Digite o ID do animal MACHO que deseja reproduzir: \n\n");
        listarObjetos($arrayAnimais);
        $machoID = readline("");
        system('clear');
        
        echo("Digite o ID do animal FEMEA que deseja reproduzir: \n\n");
        listarObjetos($arrayAnimais);
        $femeaID = readline("");
        system('clear');
        
        foreach($arrayAnimais as $macho)
        {
            
            $contagem1 = 0;
            
            if($macho->getID())
            {
                
                if($macho->getGenero() == "M")
                {
                    
                    if($macho->getTimeAcasalar() < 1)
                    {
                        
                        foreach($arrayAnimais as $femea)
                        {
                            
                            $contagem2 = 0;
                            
                            if($femea->getID() == $femeaID)
                            {
                                
                                if($femea->getGenero() == "F")
                                {
                                    
                                    if($femea->getTimeAcasalar() == 0)
                                    {
                                        
                                        if($femea->getIdade() >= 2)
                                        {
                                            
                                            $femea->setTimeAcasalar(1);
                                            $macho->setTimeAcasalar($macho->getTimeAcasalar() + 0.2);
                                            $jogador->setEnergia($jogador->getEnergia() - 10);
                                            CriarObjetos($classe, 1, $arrayAnimais);
                                            echo("Animais reproduzidos!\n");
                                            $continuar = readline("Pressione enter para continuar...");
                                            system('clear');
                                            
                                        }
                                        else
                                        {
                                            
                                            echo("Animal femea muito nova para reproduzir!\n");
                                            $continuar = readline("Pressione enter para continuar...");
                                            system('clear');
                                            
                                        }
                                    }
                                    else
                                    {
                                        
                                        echo("Animal femea precisa de tempo para reproduzir!\n");
                                        $continuar = readline("Pressione enter para continuar...");
                                        system('clear');
                                        
                                    }
                                    
                                }
                                else
                                {
                                    
                                    echo("Animal femea informado no lugar de macho!\n");
                                    $continuar = readline("Pressione enter para continuar...");
                                    system('clear');
                                    
                                }
                            }
                            else  if(count($arrayAnimais) -1 == $contagem2)
                            {
                                
                                echo("Animal femea não encontrado!\n");
                                $continuar = readline("Pressione enter para continuar...");
                                system('clear');
                                
                            }
                            
                            $contagem2++;
                            
                        }
                        
                    } // foreach femea
                    else
                    {
                        
                        echo("Animal macho precisa de tempo para reproduzir!\n");
                        $continuar = readline("Pressione enter para continuar...");
                        system('clear');
                        
                    }
                    
                }
                else
                {
                    
                    echo("Animal femea informado no local do macho!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    
                }
                
            }
            else  if(count($arrayAnimais) -1 == $contagem1)
            {
                
                echo("Animal macho teve o ID informado errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            
            $contagem1++;
            
        } // foreach macho
        
        
        // foreach($bovinos as $bovino)
        // {
            
            // if($bovino->getGenero() == "F" and $bovino->getTimeAcasalar() == 1)
                // {
                    
                    //$bovino->setTimeAcasalar(0);
                    
                // }                    
            // }
        // }
        
        // $bovino->setTimeAcasalar(1);
        // $jogador->setEnergia($jogador->getEnergia() - 10);
        // echo("Animal pronto para reprodução!\n");
        // system('clear');
        
    } // function Acasalar
    
    function CriarObjetos($classe, $quantidade, $idade, $objetos = null) 
    {
        
        if (is_array($objetos)) 
        {
            
            $objetos = $objetos;
            
        }
        else
        {
            
            $objetos = [];
            
        }
        
        if(!class_exists($classe))
        {
            
            echo("Classe não existe!\n");
            return;
            
        }
        else
        {
            
            for ($i = 0; $i < $quantidade; $i++) 
            {
                
                
                $machoFemea = 0;
                // 0 = Macho
                // 1 = Femea
                
                if(count($objetos) == 0)
                {
                    
                    if($machoFemea == 0)
                    {
                        
                        array_push($objetos, new $classe(0, $classe, $idade, "M", rand(1000, 10000), 0, 0));
                        $machoFemea = 1;
                        
                    }
                    else if($machoFemea == 1)
                    {
                        
                        array_push($objetos, new $classe(0, $classe, $idade, "F", rand(1000, 10000), 0, 0));
                        
                    }
                    else
                    {
                        
                        echo("Erro ao criar objeto, sua lógica é uma merda!\n");
                        
                    }
                    
                }
                else
                {
                    
                    if($machoFemea == 0)
                    {
                        
                        array_push($objetos, new $classe(count($objetos), $classe, $idade, "F", rand(1000, 10000), 0, 0));
                        
                    }
                    else if($machoFemea == 1)
                    {
                        
                        array_push($objetos, new $classe(count($objetos), $classe, $idade, "F", rand(1000, 10000), 0, 0));
                        
                    }
                    else
                    {
                        
                        echo("Erro ao criar objeto, sua lógica é uma merda!\n");
                        
                    }
                    
                }
                
                // count() retorna o tamanho do array em valor inteiro, mas se count(false) retorna 1, então se o array for vazio, count() retorna 1, então se count($objetos) == 0, ou seja, se o array for vazio, ele entra no if e cria o primeiro objeto com ID 0, senão ele cria o objeto com o ID sendo a contagem de itens do array, ou seja, se tiver 1 item, o ID será 1, se tiver 2, o ID será 2, e assim por diante.
                // rand() retorna um valor aleatório entre o primeiro e segundo parametro (se não me engano já usamos em aula, mas taquei no google pq esqueci e deu este, se foi outro me desculpa rs)
                
                
                
                // versão anterior, p caso a atual não funcione
                //$objetos[$i] = new $classe(count($objetos), $classe, $idade, array_rand($machoFemea), rand(1000, 10000), 0, 0);
                
                
            }
            
        }
        
        return $objetos;
        
    } // function CriarObjetos
    
    function listarObjetos($objetos) 
    {
        
        foreach($objetos as $objeto)
        {
            
            echo("ID:   " . $objeto->getID() . "\n");
            echo("Nome: " . $objeto->getNome() . "\n");
            echo("Idade: " . $objeto->getIdade() . "\n");
            echo("Gênero: " . $objeto->getGenero() . "\n");
            echo("\n");
            
        }
        
    } // function listarObjetos
    
    function finall()
    {
        
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        echo("\n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
	} // function finall
    
    function finalll()
    {
        
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┐┌ ┌─┐ ┌─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘ │││ ├─┤ │ │  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─ ┘└┘ ┴ ┴ └─┘  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
	} // function finalll
    
    
    
    
    
    $opcao = 999;
    
    $dias = 0;
    
    $jogador = new Jogador();
    
    while(!($opcao >= 1 and $opcao <= 2))
    {
        echo("╔═════════════╣Olá, Seja Bem Vindo Ao Meu Jogo╠═════════════╗ \n");
        echo("║                                                           ║ \n");
        echo("║                    Escolha uma opção:                     ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     1_ Iniciar jogo                       ║ \n");
        echo("║                                                           ║ \n");
        echo("║                     2_ Sair/Voltar                        ║ \n");
        echo("║                                                           ║ \n");
        echo("╚═══════════════════════════════════════════════════════════╝ \n");
        $opcao = readline("");
        system('clear');
        
        if(!($opcao >= 1 and $opcao <= 2)) 
        {
            
            echo("Valor informado está errado!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            
        }
        
        switch($opcao)
        {
            
            case  1:
                
                $jogador->setNome(readline("Digite o nome de seu jogador: "));
                $jogador->setDinheiro(1000000.0);
                $jogador->setEnergia(100);
                system('clear');
                
                comercarJogo($opcao, $jogador);
                
            break;
            
            case  2:
                
                finalll();
                
            break;
        }//switch
        
    }
    
    
    
    // ╔╦═╦═══╦═╦═══╦═╗
    // ╚═╩═╗ ╠═╩═╗╔╝ ═╣
    // ╔╗   ╔═╦══╬╣╚══╣
    // ║╚╗  ╚ ║╔═╩╬═╗ ║
    // ╠ ║ ╔══╣║╚╩╩╝ ╗║
    // ║ ╩═╣╚╬╝╚ ╔══╦╩╝
    // ╠ ╚═╦╩╦╩╦╩╬╝╠═╦╗
    // ╚════╩═══╩═╩═╩═╝
    
    // ═ ╔ ╦ ╗ ╚ ╩ ╝ ╠ ╬ ╣ ║
    
    
    
    // Restos de código que podem ser úteis
    
        // $bovino = new Bovino(1, "Bovino", 2, "M", 1000);
        
        //     echo("Nome: ".$bovino->getNome()."\n");
        //     echo("Idade: ".$bovino->getIdade()."\n");
        //     echo("Genero: ".$bovino->getGenero()."\n");
        //     echo("Preço: ".$bovino->getPreco()."\n");
        
        //     $continuar = readline("Pressione enter para continuar...");
    
?>