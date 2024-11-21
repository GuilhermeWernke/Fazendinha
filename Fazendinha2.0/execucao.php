<?php
    
    
    
    
    system('clear');
    
    require_once ('modelo/Jogador.php');
    require_once ('modelo/Animal.php');
    require_once ('modelo/Bovino.php');
    
    
    
    function Historia()
    {
        
        print("A história começa no começo dos anos 20, \n");
        print("quando o Brasil ainda era um país rural e agrícola. \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Você é um jovem fazendeiro que acabou de herdar a fazenda de seu pai. \n");
        print("Você tem 30 anos para fazer a fazenda prosperar e se tornar um grande fazendeiro. \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        $bovinos = CriarObjetos("Bovino", 2);
        
        if($bovinos[0]->getGenero() == "F" and $bovinos[1]->getGenero() == "F")
        {
            
            print("Você começa sua jornada com apenas 2 vacas. \n");
            
        }
        else if ($bovinos[0]->getGenero() == "M" and $bovinos[1]->getGenero() == "M")
        {
            
            print("Você começa sua jornada com apenas 2 touros. \n");
            
        }
        else
        {
            
            print("Você começa sua jornada com 1 touro e 1 vaca. \n");
            
        }
        
        print("Você tem 10000 reais para começar. \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Você pode comprar, reproduzir e vender animais, \n");
        print("tirar leite, e vender o leite para ganhar dinheiro. \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Cada Dia representa um ano, será que você consegue sobreviver? \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        return $bovinos;
        
        
    } // function Historia
    
    function comercarJogo(&$opcao, &$jogador, &$bovinos)
    {
        
        global $anos;
        
        $dormir = 0;
        
        for($anos = 0; $anos < 30; $anos++)
        {
            
            $jogador->setEnergia = 100;
            $dormir = 0;
            
            while($jogador->getEnergia() > 0 and $dormir == 0)
            {
                
                $dormir = MenuPrincipal($jogador, $bovinos);
                
            } // energia
            
        } // anos
        
        print("Parabéns, você sobreviveu 30 anos! \n");
        print("Vamos ver o que você conseguiu! \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print($jogador->getStatus());
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        foreach($bovinos as $bovino)
        {
            
            print($bovino->getStatus() . "\n");
            
        }
        
        // add futuramente a opção de ver todos ps animais que já teve, quantos leitros tirou, quantos vendeu, quantos comprou, quantos reproduziu, etc... Mas isso é para o futuro, por enquanto é só isso mesmo.
        
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Programação da versão 1.0 (feito em Portugol):\n Guilherme Canever Wernke, Petrus Mito de Souza e Maria Luiza dos Santos! \n\n");
        print("Programação da versão 2.0 (refeito do 0 em PHP):\n Guilherme Canever Wernke! \n\n");
        print("Ideia do Projeto:\n Guilherme Canever Wernke! \n\n");
        print("História Original (versão do jogo: 1.0):\n Maria Luiza dos Santos! \n\n");
        print("História Refeita (versão do jogo: 2.0):\n Reformulação da história de: Maria Luiza dos Santos por: Guilherme Canever Wernke! \n\n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Espero que tenha se divertido! \n\n");
        finall();
        
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Nunca é um Adeus, somente um até logo! \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
        print("Fim do jogo! \n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
    } // function comercarJogo
    
    function MenuPrincipal(&$jogador, &$bovinos)
    {
        
        $opcao = 999;
        
        while(!($opcao >= 0 and $opcao <=3))
        {
            
            print("╔═══════════════╣O que deseja fazer hoje?╠════════════════╗ \n");
            print("║                                                         ║ \n");
            print("║                    Escolha uma opção:                   ║ \n");
            print("║                                                         ║ \n");
            print("║                       1_ Mercado                        ║ \n");
            print("║                                                         ║ \n");
            print("║                       2_ Animais                        ║ \n");
            print("║                                                         ║ \n");
            print("║                       3_ Vender                         ║ \n");
            print("║                                                         ║ \n");
            print("║                      4_ Ver Status                      ║ \n");
            print("║                                                         ║ \n");
            print("║                        0_ Dormir                        ║ \n");
            print("╚═════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if(!($opcao >= 0 and $opcao <=4))
            {
                
                print("Valor informado está errado!\n");
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
                
                print("\n Dia: " . $GLOBALS["anos"] . "\n");
                // estou usando a variável global para pegar o valor de anos, pois não consegui passar o valor de anos para a função MenuPrincipal pq ia ter q mudar em mt lugar e bateu a preguiça
                print($jogador->getStatus());
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            break;
            
            case 0:
                
                // Próximo dia
                
            return 1;
            
        } // switch açoes do dia
        
    } // function MenuPrincipal
    
    function Mercado(&$jogador, &$bovinos)
    {
        
        $opcao = 999;
        
        
        while(!($opcao >= 0 and $opcao <=1))
        {
            print("╔═══════════════════════════════════════════════════════════╗ \n");
            print("║                                                           ║ \n");
            print("║               Escolha o que deseja comprar                ║ \n");
            print("║                                                           ║ \n");
            print("║                     1_ Animais                            ║ \n");
            print("║                                                           ║ \n");
            print("║                     0_ Voltar                             ║ \n");
            print("║                                                           ║ \n");
            print("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if(!($opcao >= 0 and $opcao <=1))
            {
                
                print("Valor informado está errado!\n");
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
            
            case 0: 
                
                MenuPrincipal($jogador, $bovinos); 
                
            break;
            
        }//switch mercado
        
    } // function Mercado
    
    function MercadoAnimais(&$jogador, &$bovinos)
    {   
        
        $opcao = 999;
        
        $bovinosLoja = CriarObjetos("Bovino", rand(5,15));
        $bovinosLoja[0]->getStatus();
        
        while(!($opcao >= 0 and $opcao <=2))
        {   
            print("╔═══════════════════════════════════════════════════════════╗ \n");
            print("║                                                           ║ \n");
            print("║              Escolha um animal para comprar:              ║ \n");
            print("║                                                           ║ \n");
            print("║                      1_ Vaca                              ║ \n");
            print("║                                                           ║ \n");
            print("║                      2_ Touro                             ║ \n");
            print("║                                                           ║ \n");							
            print("║                      0_ Voltar                            ║ \n");							
            print("║                                                           ║ \n");
            print("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if (!($opcao >= 0 and $opcao <=2))
            {
                
                print("Valor informado está errado!\n");
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
        
        print("Digite o ID do animal que deseja comprar: \n\n");
        
        foreach($animaisLoja as $animal)
        {
            
            if($animal->getGenero() == $sexo)
            {
                
                print($animal->getStatus());
                
            }
            
        }
        
        $opcao = readline("");
        system('clear');
        
        foreach($animaisLoja as $animal)
        {
            
            if(($animal->getID() == $opcao) and ($animal->getGenero() == $sexo))
            {
                
                print("Este animal vai-lhe custar: " . $animal->getPreco() .  " reais \n");
                $opcao = readline("Deseja comprar? 1_ Sim 0_ Não \n");
                $animalEncontrado = 1;
                system('clear');
                
                if("1" == $opcao)
                {
                    
                    $jogador->setDinheiro($jogador->getDinheiro() - $animal->getPreco());
                    array_push($animais, $animal);
                    $animal->setID(count($animais) -1);
                    print("Compra realizada com sucesso!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                else
                {
                    
                    print("Compra cancelada!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                
            }
            
        }
        
        if($animalEncontrado == 0)
        {
            
            print("ID informado está errado!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            
        }
        
    } // function ComprarAnimais
    
    function Venda(&$jogador, &$bovinos)
    {
        
        $opcao = 999;
        
        
        while(!($opcao >= 0 and $opcao <=1))
        {
            print("╔═══════════════════════════════════════════════════════════╗ \n");
            print("║                                                           ║ \n");
            print("║               Escolha o que deseja vender                 ║ \n");
            print("║                                                           ║ \n");
            print("║                     1_ Animais                            ║ \n");
            print("║                                                           ║ \n");
            print("║                      2_ Leite                             ║ \n");
            print("║                                                           ║ \n");
            print("║                     0_ Voltar                             ║ \n");
            print("║                                                           ║ \n");
            print("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if(!($opcao >= 0 and $opcao <=2))
            {
                
                print("Valor informado está errado!\n");
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
                
                VendaAnimais($jogador, $bovinos);   
                
            break;
            
            case 2: 
                
                $precoLeite = rand(150, 350) * 0.01;
                print("Atualmente o leite está custando: " . $precoLeite . " real por litro \n");
                $opcao = readline("Quanto dos " . $jogador->getLeite() . " litros de leite deseja vender? \n"); 
                
                if ($opcao > $jogador->getLeite())
                {
                    
                    print("Você não tem essa quantidade de leite!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    
                }
                else
                {
                    
                    $jogador->setDinheiro($jogador->getDinheiro() + ($opcao * $precoLeite));
                    $jogador->setLeite($jogador->getLeite() - $opcao);
                    print("Venda realizada com sucesso!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    
                }
                
            break;
            
            case 0: 
                
                MenuPrincipal($jogador, $bovinos); 
                
            break;
            
        }//switch mercado
        
    } // function Venda
    
    function VendaAnimais(&$jogador, &$animais)
    {
        
        $opcao = 999;
        
        while(!($opcao >= 0 and $opcao <=2))
        {   
            print("╔═══════════════════════════════════════════════════════════╗ \n");
            print("║                                                           ║ \n");
            print("║              Escolha um animal para vender:               ║ \n");
            print("║                                                           ║ \n");
            print("║                      1_ Vaca                              ║ \n");
            print("║                                                           ║ \n");
            print("║                      2_ Touro                             ║ \n");
            print("║                                                           ║ \n");							
            print("║                      0_ Voltar                            ║ \n");							
            print("║                                                           ║ \n");
            print("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao = readline("");
            system('clear');
            
            if (!($opcao >= 0 and $opcao <=2))
            {
                
                print("Valor informado está errado!\n");
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
                
                VenderAnimais($jogador, $animais, "F");
                
            break;
            
            case 2: 
                
                VenderAnimais($jogador, $animais, "M");
                
            break;
            
            case 0: 
                
                Mercado($jogador, $bovinos); 
                
            break;
            
        } // switch mercado animais
        
    } // function VendaAnimais
    
    function VenderAnimais(&$jogador, &$animais, $sexo)
    {
        
        $animalEncontrado = 0;
        
        print("Digite o ID do animal que deseja vender: \n\n");
        
        foreach($animais as $animal)
        {
            
            if($animal->getGenero() == $sexo)
            {
                
                print($animal->getStatus());
                
            }
            
        }
        
        $opcao = readline("");
        system('clear');
        
        foreach($animais as $animal)
        {
            
            if(($animal->getID() == $opcao) and ($animal->getGenero() == $sexo))
            {
                
                print("A venda deste animal vai-lhe render: " . $animal->getPreco() .  " reais \n");
                $opcao = readline("Deseja vender? 1_ Sim 0_ Não \n");
                $animalEncontrado = 1;
                system('clear');
                
                if("1" == $opcao)
                {
                    
                    $jogador->setDinheiro($jogador->getDinheiro() + $animal->getPreco());
                    array_splice($animais, $animal->getID(), 1);
                    
                    // reorganizar os IDs dos animais
                    foreach ($animais as $index => $animal) 
                    {   
                        
                        $animal->setID($index);
                        
                    }
                    
                    print("Venda realizada com sucesso!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                else
                {
                    
                    print("Compra cancelada!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    break;
                    
                }
                
            }
            
        }
        
        if($animalEncontrado == 0)
        {
            
            print("ID informado está errado!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            
        }
        
    } // function VenderAnimais
    
    function Animais(&$jogador, &$bovinos)
    {
        
        $opcao1 = 999;
        $opcao2 = 999;
        
        while(!($opcao1 >= 0 and $opcao1 <= 1))
        {
            
            print("╔═════════════════════╣Escolha o Animal╠════════════════════╗ \n");
            print("║                                                           ║ \n");
            print("║                     Escolha uma opção:                    ║ \n");
            print("║                                                           ║ \n");
            print("║                        1_ Bovinos                         ║ \n");
            print("║                                                           ║ \n");
            print("║                         0_ Voltar                         ║ \n");
            print("║                                                           ║ \n");
            print("╚═══════════════════════════════════════════════════════════╝ \n");
            $opcao1 = readline("");
            system('clear');
            
            if(!($opcao1 >= 0 and $opcao1 <= 1)) 
            {
                
                print("Valor informado está errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            
            switch($opcao1)
            {
                
                case  1:
                    
                    while(!($opcao2 >= 0 and $opcao2 <= 4))
                    {
                        
                        print("╔═══════════════════╣O que Deseja Fazer╠════════════════════╗ \n");
                        print("║                                                           ║ \n");
                        print("║                    Escolha uma opção:                     ║ \n");
                        print("║                                                           ║ \n");
                        print("║                       1_ Ver Status                       ║ \n");
                        print("║                                                           ║ \n");
                        print("║                         2_ Nomear                         ║ \n");
                        print("║                                                           ║ \n");
                        print("║                      3_ Tirar Leite                       ║ \n");
                        print("║                                                           ║ \n");
                        print("║                       4_ Reproduzir                       ║ \n");
                        print("║                                                           ║ \n");
                        print("║                         0_ Voltar                         ║ \n");
                        print("║                                                           ║ \n");
                        print("╚═══════════════════════════════════════════════════════════╝ \n");
                        $opcao2 = readline("");
                        system('clear');
                        
                        if(!($opcao2 >= 0 and $opcao2 <= 4)) 
                        {
                            
                            print("Valor informado está errado!\n");
                            $continuar = readline("Pressione enter para continuar...");
                            system('clear');
                            
                        }
                        
                        switch($opcao2)
                        {
                            
                            case  1:
                                
                                foreach($bovinos as $bovino)
                                {
                                    
                                    print($bovino->getStatus()."\n");
                                    
                                }
                                
                                $continuar = readline("Pressione enter para continuar...");
                                system('clear');
                                
                            break;
                            
                            case  2:
                                
                                print("Digite o ID do animal que deseja mudar o nome: \n\n");
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
                                
                                print("Digite o ID do animal que deseja tirar leite: \n\n");
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
                                                $jogador->setLeite($jogador->getLeite() + rand(2200, 5000));
                                                $jogador->setEnergia($jogador->getEnergia() - 10);
                                                print("Leite tirado com sucesso!\n");
                                                $continuar = readline("Pressione enter para continuar...");
                                                system('clear');
                                                break;
                                                
                                            }
                                            else
                                            {
                                                
                                                print("Animal precisa de tempo para ser ordenhado!\n");
                                                $continuar = readline("Pressione enter para continuar...");
                                                system('clear');
                                                break;
                                                
                                            }
                                            
                                        }
                                        else
                                        {
                                            
                                            print("Animal macho não pode ser ordenhado!\n");
                                            $continuar = readline("Pressione enter para continuar...");
                                            system('clear');
                                            break;
                                            
                                        }
                                        
                                    }
                                    else
                                    {
                                        
                                        print("Animal não encontrado!\n");
                                        $continuar = readline("Pressione enter para continuar...");
                                        system('clear');
                                        break;
                                        
                                    }
                                    
                                }
                                
                            break;
                            
                            case  4:
                                
                                $bovinos = Acasalar("Bovino",  $bovinos, $jogador);
                                $continuar = readline("Pressione enter para continuar...");
                                system('clear');
                                
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
    
    function Acasalar($classe, &$arrayAnimais, &$jogador)
    {
        
        $machoID = 0;
        $femeaID = 0;
        
        print("Digite o ID do animal MACHO que deseja reproduzir: \n\n");
        listarObjetos($arrayAnimais);
        $machoID = readline("");
        system('clear');
        
        print("Digite o ID do animal FEMEA que deseja reproduzir: \n\n");
        listarObjetos($arrayAnimais);
        $femeaID = readline("");
        system('clear');
        
        foreach($arrayAnimais as $macho)
        {
            
            $contagem1 = 0;
            
            if($macho->getID() == $machoID)
            {
                
                if($macho->getGenero() == "M")
                {
                    
                    if($macho->getTimeAcasalar() < 1)
                    {
                        
                        if($macho->getIdade() >= 1)
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
                                                
                                                print("Animais reproduzidos!\n");
                                                $arrayAnimais = CriarObjetos($classe, 1, $arrayAnimais, 0);
                                                break;
                                                
                                            }
                                            else
                                            {
                                                
                                                print("Animal femea muito nova para reproduzir!\n");
                                                $continuar = readline("Pressione enter para continuar...");
                                                system('clear');
                                                
                                            }
                                        }
                                        else
                                        {
                                            
                                            print("Animal femea precisa de tempo para reproduzir!\n");
                                            $continuar = readline("Pressione enter para continuar...");
                                            system('clear');
                                            
                                        }
                                        
                                    }
                                    else if($femea->getGenero() == "M")
                                    {
                                        
                                        print("Animal femea informado no lugar de macho!\n");
                                        $continuar = readline("Pressione enter para continuar...");
                                        system('clear');
                                        
                                    }
                                    else
                                    {
                                        
                                        print("Animal femea teve o ID informado errado!\n");
                                        $continuar = readline("Pressione enter para continuar...");
                                        system('clear');
                                        
                                    }
                                    
                                }
                                else  if(count($arrayAnimais) -1 == $contagem2)
                                {
                                    
                                    print("Animal femea não encontrado!\n");
                                    $continuar = readline("Pressione enter para continuar...");
                                    system('clear');
                                    
                                }
                                
                                $contagem2++;
                                
                            } // foreach femea
                        }
                        else
                        {
                            
                            print("Animal macho muito novo para reproduzir!\n");
                            $continuar = readline("Pressione enter para continuar...");
                            system('clear');
                            
                        }
                        
                    } 
                    else
                    {
                        
                        print("Animal macho precisa de tempo para reproduzir!\n");
                        $continuar = readline("Pressione enter para continuar...");
                        system('clear');
                        
                    }
                    
                }
                else if($macho->getGenero() == "F")
                {
                    
                    print("Animal femea informado no local do macho!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    
                }
                else
                {
                    
                    print("Animal macho teve o ID informado errado!\n");
                    $continuar = readline("Pressione enter para continuar...");
                    system('clear');
                    
                }
                
            }
            else  if(count($arrayAnimais) -1 == $contagem1)
            {
                
                print("Animal macho teve o ID informado errado!\n");
                $continuar = readline("Pressione enter para continuar...");
                system('clear');
                
            }
            
            $contagem1++;
            
        } // foreach macho
        
        print_r($arrayAnimais);
        
        return $arrayAnimais;
        
    } // function Acasalar
    
    function CriarObjetos($classe, $quantidade, $objetos = null, $idade = null)
    {
        
        $idadeFoiInformada = 0;
        
        if (!(is_array($objetos))) 
        {
            
            $objetos = [];
            
        }
        
        if(is_numeric($idade))
        {
            
            $idadeFoiInformada = 1;
            
        }
        
        if(!class_exists($classe))
        {
            
            print("Classe não existe!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            return;
            
        }
        else
        {
            
            for ($i = 0; $i < $quantidade; $i++) 
            {
                
                if ($idadeFoiInformada == 0)
                {
                    
                    $idade = rand(0, 20);
                    
                }
                
                $machoFemea = rand(0, 1);
                // 0 = Macho
                // 1 = Femea
                
                if(count($objetos) == 0)
                {
                    
                    if($machoFemea == 0)
                    {
                        
                        array_push($objetos, new $classe(0, $classe, $idade, "M", rand(1000, 10000), 0, 0));
                        
                    }
                    else if($machoFemea == 1)
                    {
                        
                        array_push($objetos, new $classe(0, $classe, $idade, "F", rand(1000, 10000), 0, 0));
                        
                    }
                    else
                    {
                        
                        print("Erro ao criar objeto, sua lógica é uma merda!\n");
                        
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
                        
                        print("Erro ao criar objeto, sua lógica é uma merda!\n");
                        
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
            
            print("ID:   " . $objeto->getID() . "\n");
            print("Nome: " . $objeto->getNome() . "\n");
            print("Idade: " . $objeto->getIdade() . "\n");
            print("Gênero: " . $objeto->getGenero() . "\n");
            print("\n");
            
        }
        
    } // function listarObjetos
    
    function finall()
    {
        
		print(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        print(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        print(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        print("\n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
	} // function finall
    
    function finalll()
    {
        
		print(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┐┌ ┌─┐ ┌─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n");
        print(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘ │││ ├─┤ │ │  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n");
        print(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─ ┘└┘ ┴ ┴ └─┘  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘\n");
        $continuar = readline("Pressione enter para continuar...");
        system('clear');
        
	} // function finalll
    
    
    
    
    
    $opcao = 999;
    
    $anos = 0;
    
    $jogador = new Jogador();
    
    while(!($opcao >= 1 and $opcao <= 2))
    {
        print("╔═════════════╣Olá, Seja Bem Vindo Ao Meu Jogo╠═════════════╗ \n");
        print("║                                                           ║ \n");
        print("║                    Escolha uma opção:                     ║ \n");
        print("║                                                           ║ \n");
        print("║                     1_ Iniciar jogo                       ║ \n");
        print("║                                                           ║ \n");
        print("║                     2_ Sair/Voltar                        ║ \n");
        print("║                                                           ║ \n");
        print("╚═══════════════════════════════════════════════════════════╝ \n");
        $opcao = readline("");
        system('clear');
        
        if(!($opcao >= 1 and $opcao <= 2)) 
        {
            
            print("Valor informado está errado!\n");
            $continuar = readline("Pressione enter para continuar...");
            system('clear');
            
        }
        
        switch($opcao)
        {
            
            case  1:
                
                $jogador->setNome(readline("Digite o nome de seu jogador: "));
                $jogador->setDinheiro(10000.0);
                $jogador->setEnergia(100);
                system('clear');
                
                $bovinos = Historia();
                comercarJogo($opcao, $jogador, $bovinos);
                
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
        
        // Criar e Setar Status
            // $bovino = new Bovino(1, "Bovino", 2, "M", 1000);
            
            //     print("Nome: ".$bovino->getNome()."\n");
            //     print("Idade: ".$bovino->getIdade()."\n");
            //     print("Genero: ".$bovino->getGenero()."\n");
            //     print("Preço: ".$bovino->getPreco()."\n");
            
            //     $continuar = readline("Pressione enter para continuar...");
        // Criar e Setar Status
        
        // Função louca que achei p testar mais tarde
            
            // str_repeat("═", 59)
            
        // Função louca que achei p testar mais tarde
        
    // Restos de código que podem ser úteis
    
?>