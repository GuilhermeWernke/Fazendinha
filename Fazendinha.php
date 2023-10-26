<?php
	//números de performance do jogo
    $numeroDias = 0;
    $opcao = "0";
    $opcaoInt;
    $quantidade;
    $energia = 100;
    $dormir = 0;
    $dinheiro = 0.0;

                

    //Animais e preços
    $vaca = 0;
    $valor_vaca = 1900.0;
    $racao_vaca = 1.0;
    $touro = 0;
    $valor_touro = 15000.0;
    $racao_touro = 1.0;
    $jegue = 0;
    $valor_jegue = 500.0;
    $racao_jegue = 1.0;
    $jumenta = 2;
    $valor_jumenta = 700.0;
    $racao_jumenta = 1.0;

    //Alimentos e preços
    $leite_vaca = 0;
    $valor_leite_vaca = 200.0;
    $leite_jumenta = 0;
    $valor_leite_jumenta = 50.0;
    $carne_de_gato = 0;
    $valor__carne_de_gato = 100.0;
    $carne_de_cachorro = 0;
    $valor__carne_de_cachorro = 300.0;
    $carne_de_boi = 0;
    $valor__carne_de_boi = 700.0;
    $verduras = 0;
    $valor_verduras = 50.0;
    $frutas = 0;
    $valor_frutas = 30.0;
    $cereais = 0;
    $valor_cereais = 80.0;
    $agua = 0;
    $valor_agua = 60.0;
    $suco = 0;
    $valor_suco = 35.0;
    
    //Rações
    $racao_barata = 0;
    $valor__racao_barata = 100.0;
    $racao_media  = 0;
    $valor__racao_media = 200.0;
    $racao_cara = 0;
    $valor__racao_cara = 400.0;

    //Produção
    $time_leite_vaca = 0;
    $time_leite_jumenta = 0;
    $time_reproducao_touro = 0;
    $time_reproducao_jegue = 0;
    $vaca_alimentada = 0.0;
    $touro_alimentado = 0.0;
    $jumenta_alimentada = 0.0;
    $jegue_alimentado = 0.0;
    $time_bebe_vaca = 0;
    $time_bebe_jumenta = 0;
    $time_fazer_bebe_vaca = 0;
    $time_fazer_bebe_jumenta = 0;

    $bebe_vaca = 0;
    $bebe_jumenta = 0;



    
    $comecar_jogo = 0;
    $sair_voltar = 0;
    
    enquanto(opcao != "1" ou opcao != "2")
    {
        echo("╔═══════════════════════════════════════════════════════════╗ \n")
        echo("║           Olá,  seja bem vindo ao nosso jogo!             ║ \n")
        echo("║                                                           ║ \n")
        echo("║                    Escolha uma opção:                     ║ \n")
        echo("║                                                           ║ \n")
        echo("║                     1_ Iniciar jogo                       ║ \n")
        echo("║                                                           ║ \n")
        echo("║                     2_ Sair/Voltar                        ║ \n")
        echo("║                                                           ║ \n")
        echo("╚═══════════════════════════════════════════════════════════╝ \n")
                    
        leia(opcao)

        se(opcao == "1" ou opcao == "2")
        {
            opcaoInt = t.cadeia_para_inteiro(opcao, 10)
            pare
        }
        senao
        {
            echo("Valor informado está errado!\n")
            u.aguarde(1000)
        }
    }

    escolha(opcaoInt)
    {
        caso  1:
        comercarJogo()
        pare
        caso  2:
        animacao2()
        pare
    }//escolha
    
    


	funcao comercarJogo()
    {
		
		para(numeroDias = numeroDias; numeroDias < 100; numeroDias++)
        {

			time_leite_jumenta = 0
			time_leite_vaca = 0

			Subtrair(time_bebe_vaca)
			Subtrair(time_bebe_jumenta)

			se(time_fazer_bebe_vaca > 0)
            {
				Subtrair(time_fazer_bebe_vaca)
			}
			senao{
				para(bebe_vaca; bebe_vaca != 0; bebe_vaca--)
                {
					quantidade = u.sorteia(1, 10)
					se(quantidade > 0 e quantidade < 4)
                    {
						touro++
					}
					senao{
						vaca++
					}
				}
			}

			
			se(time_fazer_bebe_jumenta > 0)
            {
				Subtrair(time_fazer_bebe_jumenta)
			}
			senao
            {
				para(bebe_jumenta; bebe_jumenta != 0; bebe_jumenta--)
                {
					quantidade = u.sorteia(1, 10)
					se(quantidade > 0 e quantidade < 4)
                    {
						jegue++
					}
					senao
                    {
						jumenta++
					}
				}
			}		
			
			
			energia = 100
			dormir = 0

			FomeAnimais(racao_vaca)
			FomeAnimais(racao_touro)
			FomeAnimais(racao_jegue)
			FomeAnimais(racao_jumenta)
				
			se (numeroDias == 0 )
            {
				limpa()
				echo("A história começa no começo dos anos 40, \nquando a Segunda Guerra Mundial começou.")
				u.aguarde(4500)
				limpa()
				echo("Você vive na Suíça, tentando ganhar dinheiro com sua fazenda, \njá que a situação do mundo não ajuda a sua condição financeira.")
				u.aguarde(8000)
				limpa()
				echo("Atualmente, você tem tentado lucrar com seus animais, vendendo leite de vaca, carne de boi...")
				u.aguarde(5000)
				limpa()
				echo("Porém, você é pobre e precisa urgentemente trabalhar para conseguir sobreviver.")
				u.aguarde(8000)
				limpa()
				echo("Boa Sorte!")
				u.aguarde(3000)
				limpa()
				
			}//se
 			mercado_inicio()
										
		}//para
		se(dinheiro<500)
        {
			echo("Você morreu pobre")
		}
		senao se(dinheiro<1000)
        {
			echo("Você morreu mas teve uma vida médiana")
		}
		senao se(dinheiro>=10000)
        {
			echo("Você teve uma vida de luxo")
		}
		u.aguarde(3000)
		inicio_animacao()
	} // fim da funcao comercarJogo
	funcao mercado_inicio()
    {
		enquanto(energia > 0 e dormir == 0)
        {
            enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"  ou opcao != "5")
            {
                echo("╔═══════════════════════════════════════════════════════════╗ \n")
                echo("║                                                           ║ \n")
                echo("║                O que deseja fazer hoje?                   ║ \n")
                echo("║                                                           ║ \n")
                echo("║                    Escolha uma opção:                     ║ \n")
                echo("║                                                           ║ \n")
                echo("║                     1_ Mercado                            ║ \n")
                echo("║                                                           ║ \n")
                echo("║                     2_ Animais                            ║ \n")
                echo("║                                                           ║ \n")
                echo("║                     3_ Consumir Alimentos                 ║ \n")
                echo("║                                                           ║ \n")
                echo("║                     4_ Vender                             ║ \n")
                echo("║                                                           ║ \n")
                echo("║                     5_ Dormir                             ║ \n")
                echo("║                                                           ║ \n")
                echo("╚═══════════════════════════════════════════════════════════╝ \n")
                leia(opcao)

                se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4"  ou opcao == "5")
                {
                    opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                    pare
                }
                senao
                {
                    echo("Valor informado está errado!\n")
                }
            }
            escolha(opcaoInt)
            {
                caso 1:
                    Mercado()
                pare

                caso 2:
                    Animais()
                pare

                caso 3:
                    ConsumirAlimentos()
                pare

                caso 4:
                        Venda()
                
                caso 5:
                    dormir += 1
                pare
                
            }//escolha açoes do dia
            
        }//energia
	}//funcao mercado_inicio

	funcao Mercado()
    {
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║               Escolha o que deseja comprar                ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     1_ Animais                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     2_ Alimento                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     3_ Sementes                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Voltar                             ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)

            se(opcao == "1" ou opcao == "2"  ou opcao == "3" ou opcao == "4")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }

        escolha(opcaoInt)
        {
            caso 1:
                    MercadoAnimais()
            pare
            caso 2:
                MercadoAlimento()
            pare
            caso 3:
                MercadoSemente()
            pare
            caso 4:
                    mercado_inicio()
            pare
        }//escolha mercado
	}//funcao Mercado

    funcao MercadoAnimais()
    {
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║              Escolha um animal para comprar:              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      1_ Vaca                              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      2_ Touro                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      3_ Jegue                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      4_ Jumenta                           ║ \n")
            echo("║                                                           ║ \n")							
            echo("║                      5_ Voltar                            ║ \n")							
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)

            se(opcao == "1" ou opcao == "2"  ou opcao == "3"  ou opcao == "4" ou opcao == "5")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }
    
        escolha(opcaoInt)
        {
            caso 1:
                AbreviarMercado(valor_vaca, vaca)
            pare
            
            caso 2:
                AbreviarMercado(valor_touro, touro)
            pare
            
            caso 3:
                AbreviarMercado(valor_jegue, jegue)
            pare
                                    
            caso 4:
                AbreviarMercado(valor_jumenta, jumenta)
            pare

            caso 5:
                    Mercado()
            pare
        }// fim da escolha animal
    } //fim da funcao MercadoAnimais

    funcao MercadoAlimento()
    {
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9" ou opcao != "10" ou opcao != "11" ou opcao != "12" ou opcao != "13" ou opcao != "14")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║            Escolha um alimento para comprar:              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                  1_ Carne de Gato                         ║ \n")
            echo("║                                                           ║ \n")
            echo("║                 2_ Carne de Cachorro                      ║ \n")
            echo("║                                                           ║ \n")
            echo("║                   3_ Carne de Boi                         ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Verduras                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      5_ Frutas                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      6_ Cereais                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       7_ Água                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      8_ Leite Vaca                        ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     9_ Leite Jumenta                      ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       10_ Suco                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                11_ Ração Barata (3 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                 12_ Ração Média (5 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                  13_ Ração Cara (7 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       14_ Voltar                          ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)
            
            se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9" ou opcao == "10" ou opcao == "11" ou opcao == "12" ou opcao == "13" ou opcao == "14")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }

        escolha(opcaoInt)
        {
            caso 1:			
                    AbreviarMercado(valor__carne_de_gato, carne_de_gato)
            pare
            
            caso 2:
                AbreviarMercado(valor__carne_de_cachorro, carne_de_cachorro)
            pare
            
            caso 3:
                AbreviarMercado(valor__carne_de_boi, carne_de_boi)
            pare
            
            caso 4:
                AbreviarMercado(valor_verduras, verduras)
            pare
            
            caso 5:
                AbreviarMercado(valor_frutas, frutas)
            pare
            
            caso 7:
                AbreviarMercado(valor_agua, agua)
            pare
            
            caso 8:
                AbreviarMercado(valor_leite_vaca, leite_vaca)
            pare

            caso 9:
                AbreviarMercado(valor_leite_jumenta, leite_jumenta)
            pare
            
            caso 10:
                AbreviarMercado(valor_suco, suco)
            pare
        
            caso 11:
                AbreviarMercado(valor__racao_barata, racao_barata)
            pare
            
            caso 12:
                AbreviarMercado(valor__racao_media, racao_media)
            pare
            
            
            caso 13:
                AbreviarMercado(valor__racao_cara, racao_cara)
            pare	

            caso 14:
                Mercado()

        }//escolha alimentos
    }//fim mercado alimento

    funcao MercadoSemente()
    {
    
	}//funcao mercado alimento

	funcao Venda()
    {
		limpa()
		enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║                Escolha o que deseja vender                ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     1_ Animais                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     2_ Alimento                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     3_ Sementes                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Voltar                             ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)

            se(opcao == "1" ou opcao == "2"  ou opcao == "3" ou opcao == "4")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }

        escolha(opcaoInt)
        {
            caso 1:
                    VendaAnimais()
            pare
            caso 2:
                VendaAlimento()
            pare
            caso 3:
                VendaSemente()
            pare
            caso 4:
                    mercado_inicio()
        }
	}//funcao Venda

    funcao VendaAnimais(){
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║              Escolha um animal para vender:               ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     1_ Vaca                               ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     2_ Touro                              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     3_ Jegue                              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Jumenta                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     5_ Voltar                             ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)

            se(opcao == "1" ou opcao == "2"  ou opcao == "3"  ou opcao == "4" ou opcao =="5")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }
        
        escolha(opcaoInt)
        {
            caso 1:
                AbreviarVenda(valor_vaca, vaca)
            pare
            
            caso 2:
                AbreviarVenda(valor_touro, touro)
            pare
            
            caso 3:
                AbreviarVenda(valor_jegue, jegue)
            pare
                                    
            caso 4:
                AbreviarVenda(valor_jumenta, jumenta)
            pare

            caso 5:
                Venda()
        }// fim da escolha animal
        
    }//funcao VendaAnimais

    funcao VendaAlimento()
    {
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9" ou opcao != "10" ou opcao != "11" ou opcao != "12" ou opcao != "13")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║             Escolha um alimento para vender:              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                  1_ Carne de Gato                         ║ \n")
            echo("║                                                           ║ \n")
            echo("║                 2_ Carne de Cachorro                      ║ \n")
            echo("║                                                           ║ \n")
            echo("║                   3_ Carne de Boi                         ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Verduras                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      5_ Frutas                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      6_ Cereais                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       7_ Água                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      8_ Leite                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       9_ Suco                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                10_ Ração Barata (3 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                 11_ Ração Média (5 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                  12_ Ração Cara (7 Dias)                  ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       13_ Voltar                          ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)
            
            se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9" ou opcao == "10" ou opcao == "11" ou opcao == "12" ou opcao == "13")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }

        escolha(opcaoInt)
        {
            caso 1:
                AbreviarVenda(valor__carne_de_gato, carne_de_gato)
            pare
            
            caso 2:
                AbreviarVenda(valor__carne_de_cachorro, carne_de_cachorro)
            pare
            
            caso 3:
                AbreviarVenda(valor__carne_de_boi, carne_de_boi)
            pare
            
            caso 4:
                AbreviarVenda(valor_verduras, verduras)
            pare
            
            caso 5:
                AbreviarVenda(valor_frutas, frutas)
            pare
            
            caso 7:
                AbreviarVenda(valor_agua, agua)
            pare
            
            caso 8:
                AbreviarVenda(valor_leite_vaca, leite_vaca)
            pare
            
            caso 9:
                AbreviarVenda(valor_suco, suco)
            pare
            
            
            caso 10:
                AbreviarVenda(valor__racao_barata, racao_barata)
            pare
            
            caso 11:
                AbreviarVenda(valor__racao_media, racao_media)
            pare
            
            
            caso 12:
                AbreviarVenda(valor__racao_cara, racao_cara)
            pare		
            
            caso 13:
                    Venda()			
        }//escolha alimento
        
    }//funcao VendaAlimento

    funcao VendaSemente()
    {
        
    }//funcao VendaSemente

	funcao Animais()
    {
		limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5")
        {
            limpa()
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║               Qual animal deseja administrar              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     Escolha uma opção:                    ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      1_ Vaca                              ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      2_ Touro                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      3_ Jegue                             ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      4_ Jumenta                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      5_ Voltar                            ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)
        
            se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao{
                escreva("Valor informado está errado!\n")
            }
            }
            
            escolha(opcaoInt)
            {
                caso 1:
                limpa()
                    enquanto(opcao != "1" ou opcao != "2" ou opcao != "3")
                    {
                        limpa()
                        echo("╔═══════════════════════════════════════════════════════════╗ \n")
                        echo("║                                                           ║ \n")
                        echo("║                           Vaca                            ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                    Escolha uma opção:                     ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       1_ Alimentar                        ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                      2_ Tirar leite                       ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       3_ Voltar                           ║ \n")
                        echo("║                                                           ║ \n")
                        echo("╚═══════════════════════════════════════════════════════════╝ \n")
                        leia(opcao)
                        
                        se(opcao == "1" ou opcao == "2" ou opcao == "3")
                        {
                            opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                            pare
                        }
                        senao
                        {
                            echo("Valor informado está errado!\n")
                        }
                    }

                    escolha(opcaoInt)
                    {
                        caso 1:
                            AlimentarAnimais(vaca_alimentada, racao_cara, racao_media, racao_barata)
                        pare
                        caso 2:
                            Leite(vaca_alimentada, time_leite_vaca, leite_vaca, vaca)
                        pare
                        caso 3:
                                Animais()
                        pare
                    }// escolha vaca
                pare
                caso 2:
                limpa()
                    enquanto(opcao != "1" ou opcao != "2" ou opcao != "3")
                    {
                        limpa()
                        echo("╔═══════════════════════════════════════════════════════════╗ \n")
                        echo("║                                                           ║ \n")
                        echo("║                          Touro                            ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                    Escolha uma opção:                     ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                      1_ Alimentar                         ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       2_ Cruzar                           ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       3_ Voltar                           ║ \n")
                        echo("║                                                           ║ \n")
                        echo("╚═══════════════════════════════════════════════════════════╝ \n")
                        leia(opcao)
                        
                        se(opcao == "1" ou opcao == "2" ou opcao == "3")
                        {
                            opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                            pare
                        }
                        senao{
                            echo("Valor informado está errado!\n")
                        }
                    }
                    escolha(opcaoInt){
                        caso 1:
                            AlimentarAnimais(touro_alimentado, racao_cara, racao_media, racao_barata)
                        pare
                        caso 2:
                            Reproduzir(time_fazer_bebe_vaca, bebe_vaca, touro_alimentado, touro, vaca)
                        pare
                        caso 3:
                                Animais()
                        pare
                    }//escolha touro
                pare
                caso 3:
                limpa()
                    enquanto(opcao != "1" ou opcao != "2" ou opcao != "3")
                    {
                        limpa()
                        echo("╔═══════════════════════════════════════════════════════════╗ \n")
                        echo("║                                                           ║ \n")
                        echo("║                          Jegue                            ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                    Escolha uma opção:                     ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       1_ Alimentar                        ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                        2_ Cruzar                          ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                        3_ Voltar                          ║ \n")
                        echo("║                                                           ║ \n")
                        echo("╚═══════════════════════════════════════════════════════════╝ \n")
                        leia(opcao)
                        
                        se(opcao == "1" ou opcao == "2" ou opcao == "3")
                        {
                            opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                            pare
                        }
                        senao
                        {
                            echo("Valor informado está errado!\n")
                        }
                    }
                    
                    escolha(opcaoInt)
                    {
                        caso 1:
                            AlimentarAnimais(jegue_alimentado, racao_cara, racao_media, racao_barata)
                        pare
                        caso 2:
                            Reproduzir(time_fazer_bebe_jumenta, bebe_jumenta, jegue_alimentado, jegue, jumenta)
                        pare
                        caso 3:
                                Animais()
                        pare
                        
                    }//escolha jegue
                pare
                caso 4:
                limpa()
                    enquanto(opcao != "1" ou opcao != "2" ou opcao != "3")
                    {
                        limpa()
                        echo("╔═══════════════════════════════════════════════════════════╗ \n")
                        echo("║                                                           ║ \n")
                        echo("║                         Jumenta                           ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                    Escolha uma opção:                     ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                       1_ Alimentar                        ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                      2_ Tirar leite                       ║ \n")
                        echo("║                                                           ║ \n")
                        echo("║                        3_ Voltar                          ║ \n")
                        echo("║                                                           ║ \n")
                        echo("╚═══════════════════════════════════════════════════════════╝ \n")
                        leia(opcao)
                    
                        se(opcao == "1" ou opcao == "2" ou opcao == "3")
                        {
                            opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                            pare
                        }
                        senao
                        {
                            echo("Valor informado está errado!\n")
                        }
                    }
                        
                    escolha(opcaoInt)
                    {
                        caso 1:
                            AlimentarAnimais(jumenta_alimentada, racao_cara, racao_media, racao_barata)
                        pare
                        caso 2:
                            Leite(jumenta_alimentada, time_leite_jumenta, leite_jumenta, jumenta)
                        pare
                        caso 3:
                                Animais()
                        pare
                        
                    }//escolha jumenta
                    caso 5:
                            mercado_inicio()
                pare
            
            }//administrar animais
		}//funcao Animais

	funcao Reproduzir(inteiro time, inteiro bebe, inteiro racao, inteiro touroo, inteiro vacaa){
		se(time <= 0 e touroo > 0 e vacaa > 0)
        {
			bebe = u.sorteia(1, vacaa)
			bebe = bebe * racao
			time = 10
		}
	}//funcao reproduzir

	funcao Leite(real a, inteiro x, inteiro y, inteiro z)
    {
        se(x <= 0 e z > 0)
        {
            y = a * y + z
            x++
            echo("Leite tirado com sucesso!\n")
            u.aguarde(2000)
        }
        senao{
            echo("Já tirou leite de todas as vacas!\n")
            u.aguarde(2000)
        }
}

	funcao ConsumirAlimentos()
    {
		limpa()
		enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9" ou opcao != "10")
        {
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║               Escolha um algo para ingerir:               ║ \n")
            echo("║                                                           ║ \n")
            echo("║                   1_ Carne de Gato                        ║ \n")
            echo("║                                                           ║ \n")
            echo("║                  2_ Carne de Cachorro                     ║ \n")
            echo("║                                                           ║ \n")
            echo("║                    3_ Carne de Boi                        ║ \n")
            echo("║                                                           ║ \n")
            echo("║                      4_ Verduras                          ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       5_ Frutas                           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       6_ Cereais                          ║ \n")
            echo("║                                                           ║ \n")
            echo("║                        7_ Água                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       8_ Leite                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                        9_ Suco                            ║ \n")
            echo("║                                                           ║ \n")
            echo("║                       10_ Voltar                          ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)
            
            se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9" ou opcao == "10")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }

        escolha(opcaoInt)
        {
            caso 1:
                AbreviarConsumo(100, carne_de_gato)
            pare
            
            caso 2:
                AbreviarConsumo(150, carne_de_cachorro)
            pare
            
            caso 3:
                AbreviarConsumo(200, carne_de_boi)
            pare
            
            caso 4:
                AbreviarConsumo(75, verduras)
            pare
            
            caso 5:
                AbreviarConsumo(60, frutas)
            pare
            
            caso 7:
                AbreviarConsumo(50, agua)
            pare
            
            caso 8:
                AbreviarConsumo(55, leite_vaca)
            pare
            
            caso 9:
                AbreviarConsumo(50, suco)
            pare	
            caso 10:
                    mercado_inicio()
            pare			
        }//escolha alimentos
		
	}// funcao ConsumirAlimentos

	funcao AbreviarMercado(real x, inteiro y){

        echo("Quantos animais você deseja comprar? \n")
        leia(quantidade)
        echo("Compra reultará em: ", quantidade * x)
        echo("\n Deseja comprar? \n")
        echo("1_  sim \n")
        echo("2_  não \n")
        leia(opcao)
        
        enquanto(opcao != "1" ou opcao != "2"){
            se(opcao == "1" ou opcao == "2"){
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
            pare
            }
            senao{
                echo("Valor informado está errado!\n")
            }
        }
        
        
        escolha(opcaoInt)
        {
            caso 1:
                se(quantidade * x <= dinheiro e energia >= 15)
                {
                    limpa()
                    y = y + quantidade
                    energia = energia - 15
                    dinheiro = dinheiro - (quantidade * x)
                    echo("Compra realizada com sucesso!\n")
                    u.aguarde(2000)
                }
                senao se(energia < 15)
                {
                    limpa()
                    echo("Compra negada, energia baixa!\n")
                    u.aguarde(2000)
                }
                senao
                {
                    limpa()
                    echo("Compra negada\n")
                    u.aguarde(2000)
                }
                pare
            caso 2:
                limpa()
                echo("Se é o que deseja\n")
                u.aguarde(2000)
        }//fim escolha compra
		
	}//funcao AbreviarMercado

	funcao AbreviarVenda(real x, inteiro y)
    {

        echo("Quantos animais você deseja vender? \n")
        leia(quantidade)
        echo("Venda reultará em: ", quantidade * x)
        echo("\n Deseja comprar? \n")
        echo("1_  sim \n")
        echo("2_  não \n")
        leia(opcao)
        
        enquanto(opcao != "1" ou opcao != "2"){
            se(opcao == "1" ou opcao == "2"){
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
            pare
            }
            senao{
                echo("Valor informado está errado!\n")
            }
        }
        
        
        escolha(opcaoInt){
            caso 1:
                se(quantidade >= x e energia >= 15)
                {
                    limpa()
                    y = y - quantidade
                    energia = energia - 15
                    dinheiro = dinheiro + (quantidade * x)
                    echo("Venda realizada com sucesso!\n")
                    u.aguarde(2000)
                }
                senao se(energia < 15){
                    limpa()
                    echo("Venda negada, energia baixa!\n")
                    u.aguarde(2000)
                }
                senao
                {
                    limpa()
                    echo("Venda negada\n")
                    u.aguarde(2000)
                }
                pare
            caso 2:
                limpa()
                echo("Venda negada\n")
                u.aguarde(2000)
        }//fim escolha compra
		
	}//funcao AbreviarVenda
	
	funcao AbreviarConsumo(inteiro x, inteiro y)
    {

        echo("Quantos deste alimento você deseja consumir?? \n")
        leia(quantidade)
        echo("Consumo reultará em: ", y)
        echo("\n Deseja consumir? \n")
        echo("1_  sim \n")
        echo("2_  não \n")
        leia(opcao)
        
        enquanto(opcao != "1" ou opcao != "2")
        {
            se(opcao == "1" ou opcao == "2")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
            pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }
        
        
        escolha(opcaoInt)
        {
            caso 1:
                se(quantidade <= y)
                {
                    limpa()
                    y = y - quantidade
                    energia = energia + (quantidade * x)
                    echo("Consumo realizado com sucesso!\n")
                    u.aguarde(2000)
                }
                senao
                {
                    limpa()
                    echo("Consumo negado\n")
                    u.aguarde(2000)
                }
                pare
            caso 2:
                limpa()
                echo("Consumo negado\n")
                u.aguarde(2000)
        }//fim escolha compra
		
	}//funcao AbreviarVenda

	funcao AlimentarAnimais(real x, inteiro a, inteiro b, inteiro c)
    {
        limpa()
        enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4")
        {
            limpa()
            echo("╔═══════════════════════════════════════════════════════════╗ \n")
            echo("║                                                           ║ \n")
            echo("║          Qual ração deseja usaer para Alimentar           ║ \n")
            echo("║                                                           ║ \n")
            echo("║                    Escolha uma opção:                     ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     1_ Ração Cara                         ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     2_ Ração Média                        ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     3_ Ração Barata                       ║ \n")
            echo("║                                                           ║ \n")
            echo("║                     4_ Voltar                             ║ \n")
            echo("║                                                           ║ \n")
            echo("╚═══════════════════════════════════════════════════════════╝ \n")
            leia(opcao)
        
            se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4")
            {
                opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
            }
            senao
            {
                echo("Valor informado está errado!\n")
            }
        }
            
            
        escolha(opcaoInt)
        {
            caso 1:
            echo("Quantas desta rações você deseja usar para alimentar este animal?? \n")
            leia(quantidade)
            echo("Reultará em: ", quantidade)
            echo("\n Deseja alimentar? \n")
            echo("1_  sim \n")
            echo("2_  não \n")
            leia(opcao)
            
            enquanto(opcao != "1" ou opcao != "2")
            {
                se(opcao == "1" ou opcao == "2")
                {
                    opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                pare
                }
                senao
                {
                    echo("Valor informado está errado!\n")
                }
            }
            
            
            escolha(opcaoInt)
            {
                caso 1:
                    se(quantidade <= a)
                    {
                        limpa()
                        a = a - quantidade
                        energia = energia - (quantidade * 10)
                        x = x + (0.25)
                        echo("Alimentação realizada com sucesso!\n")
                        u.aguarde(2000)
                    }
                    senao
                    {
                        limpa()
                        echo("Alimentação negada\n")
                        u.aguarde(2000)
                    }
                    pare
                caso 2:
                    limpa()
                    echo("Se é o que deseja\n")
                    u.aguarde(2000)
                    }//fim escolha compra
            pare
            caso 2:
            echo("Quantas desta rações você deseja usar para alimentar este animal?? \n")
                leia(quantidade)
                echo("Reultará em: ", quantidade)
                echo("\n Deseja alimentar? \n")
                echo("1_  sim \n")
                echo("2_  não \n")
                leia(opcao)
                
                enquanto(opcao != "1" ou opcao != "2")
                {
                    se(opcao == "1" ou opcao == "2")
                    {
                        opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                        pare
                    }
                    senao
                    {
                        echo("Valor informado está errado!\n")
                    }
                }
                
                
                escolha(opcaoInt)
                {
                    caso 1:
                        se(quantidade <= b)
                        {
                            limpa()
                            b = b - quantidade
                            energia = energia - (quantidade * 10)
                            x = x + (0.1)
                            echo("Alimentação realizada com sucesso!\n")
                            u.aguarde(2000)
                        }
                        senao
                        {
                            limpa()
                            echo("Alimentação negada\n")
                            u.aguarde(2000)
                        }
                        pare
                    caso 2:
                        limpa()
                        echo("Alimentação negada\n")
                        u.aguarde(2000)
                }//fim escolha compra
                pare
            caso 3:
            echo("Quantas desta rações você deseja usar para alimentar este animal?? \n")
                leia(quantidade)
                echo("Reultará em: ", quantidade)
                echo("\n Deseja alimentar? \n")
                echo("1_  sim \n")
                echo("2_  não \n")
                leia(opcao)
                
                enquanto(opcao != "1" ou opcao != "2")
                {
                    se(opcao == "1" ou opcao == "2")
                    {
                        opcaoInt = t.cadeia_para_inteiro(opcao, 10)
                        pare
                    }
                    senao
                    {
                        escreva("Valor informado está errado!\n")
                    }
                }
                
                
                escolha(opcaoInt)
                {
                    caso 1:
                        se(quantidade <= c)
                        {
                            limpa()
                            c = c - quantidade
                            energia = energia - (quantidade * 10)
                            x = x + (0.05)
                            echo("Alimentação realizada com sucesso!\n")
                            u.aguarde(2000)
                        }
                        senao
                        {
                            limpa()
                            echo("Alimentação negada\n")
                            u.aguarde(2000)
                        }
                        pare
                    caso 2:
                        limpa()
                        echo("Alimentação negada\n")
                        u.aguarde(2000)
                }//fim escolha compra
                pare
            caso 4:
                    Animais()
		}//escolha ração			
	}//alimentar animais

	funcao FomeAnimais(real y)
    {
        se(y != 1.0)
        {
            y = y - 0.05
        }
	}//funcao Fome Animais
		
	funcao animacao2()
	{
		inteiro coluna_inicial = 0
		inteiro passos = 16
		
		animar2(coluna_inicial, passos)
	}
     
	funcao animar2(inteiro coluna_inicial, inteiro passos)
	{
		inteiro coluna_final = coluna_inicial + passos
		
		para (inteiro coluna = coluna_inicial; coluna < coluna_final; coluna++)
		{
			para (inteiro andando = 0; andando <= 1; andando++)
			{
				limpa()
				desenhar_pato2(coluna, andando)
				u.aguarde(500)
			}
		}

		limpa()
		desenhar_pato2(coluna_final, 0)
	}//movimentaçao
	
	funcao desenhar_pato2(inteiro coluna, inteiro andando)
	{
		echo("\n")
		se (andando == 0)
		{
			branco_coluna_cima2((coluna * 3) + 7)
			echo(" (.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo2((coluna * 3) + 5)
			echo("..\\___)..\\___)..\\___)..\\___).")
		} 
		senao
		{
			branco_coluna_cima2((coluna * 3) + 6)
			branco_coluna_cima2(4)
			echo("(.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo2((coluna * 3) + 6)
			echo("..\\___)..\\___)..\\___)..\\___).")
		}
		echo("\n")
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┐┌ ┌─┐ ┌─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n")  
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘ │││ ├─┤ │ │  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n")
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─ ┘└┘ ┴ ┴ └─┘  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘")
	}//pula espaços no inicio
	
	funcao branco_coluna_baixo2(inteiro quant)
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			echo(".")
			brancos++
		}
	}
	
	funcao branco_coluna_cima2(inteiro quant)
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			echo(" ")
			brancos++
		}
	}
	
	funcao inicio_animacao()
	{
		inteiro coluna_inicial = 0
		inteiro passos = 10
		
		animar(coluna_inicial, passos)
	}
     
	funcao animar(inteiro coluna_inicial, inteiro passos)
	{
		inteiro coluna_final = coluna_inicial + passos
		
		para (inteiro coluna = coluna_inicial; coluna < coluna_final; coluna++)
		{
			para (inteiro andando = 0; andando <= 1; andando++)
			{
				limpa()
				desenhar_pato(coluna, andando)
				u.aguarde(500)
			}
		}

		limpa()
		desenhar_pato(coluna_final, 0)
	}//movimentaçao
	
	funcao desenhar_pato(inteiro coluna, inteiro andando)
	{
		echo("\n")
		se (andando == 0)
		{
			branco_coluna_cima((coluna * 3) + 7)
			echo(" (.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo((coluna * 3) + 5)
			echo("..\\___)..\\___)..\\___)..\\___).")
		} 
		senao
		{
			branco_coluna_cima((coluna * 3) + 6)
			branco_coluna_cima(4)
			echo("(.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo((coluna * 3) + 6)
			echo("..\\___)..\\___)..\\___)..\\___).")
		}
		echo("\n")
		final()
	}//pula espaços no inicio
	
	funcao branco_coluna_baixo(inteiro quant)
	
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			echo(".")
			brancos++
		}
	}
	
	funcao branco_coluna_cima(inteiro quant)
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			echo(" ")
			brancos++
		}
	}
	
	funcao final(){
		echo(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n")  
        echo(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n")
        echo(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘")
	}

	funcao Subtrair(inteiro x)
    {
		se ( x > 0){
			x--
		}
	}
	
//programa 
?>
