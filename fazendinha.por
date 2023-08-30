programa
{
	inclua biblioteca Tipos --> t
	inclua biblioteca Util --> u
	inclua biblioteca Matematica

	//números de performance do jogo
	inteiro numeroDias = 0
	cadeia opcao = "0"
	inteiro opcaoInt
	inteiro quantidade
	inteiro energia = 100
	inteiro dormir = 0
	real dinheiro = 0.0
	
					

     //Animais e preços
	inteiro vaca = 2
     real valor_vaca = 1900.0
     real racao_vaca = 1.0
     inteiro touro = 0
     real valor_touro = 15000.0
     real racao_touro = 1.0
     inteiro jegue = 0
     real valor_jegue = 0.0
     real racao_jegue = 1.0
     inteiro jumenta = 0
     real valor_jumenta = 0.0
     real racao_jumenta = 1.0

     //Alimentos e preços
     inteiro leite = 0
     real valor_leite = 0.0
     inteiro carne_de_gato = 0
     real valor__carne_de_gato = 0.0
     inteiro carne_de_cachorro = 0
     real valor__carne_de_cachorro = 0.0
     inteiro carne_de_boi = 0
     real valor__carne_de_boi = 0.0
     inteiro verduras = 0
     real valor_verduras = 0.0
     inteiro frutas = 0
     real valor_frutas = 0.0
     inteiro cereais = 0
     real valor_cereais = 0.0
     inteiro agua = 0
     real valor_agua = 0.0
     inteiro suco = 0
     real valor_suco = 0.0
     
     //Rações
     inteiro racao_barata = 0
     real valor__racao_barata = 0.0
     inteiro racao_media  = 0
     real valor__racao_media = 0.0
     inteiro racao_cara = 0
     real valor__racao_cara = 0.0

     //Produção
     inteiro time_leite = 0
	
	funcao inicio(){
	    
	     inteiro comecar_jogo = 0
	     inteiro sair_voltar = 0
	      
	     enquanto(opcao != "1" ou opcao != "2"){
			escreva("╔═══════════════════════════════════════════════════════════╗ \n")
			escreva("║           Olá,  seja bem vindo ao nosso jogo!             ║ \n")
			escreva("║                                                           ║ \n")
			escreva("║                    Escolha uma opção:                     ║ \n")
			escreva("║                                                           ║ \n")
			escreva("║                     1_ Iniciar jogo                       ║ \n")
			escreva("║                                                           ║ \n")
			escreva("║                     2_ Sair/Voltar                        ║ \n")
			escreva("║                                                           ║ \n")
			escreva("╚═══════════════════════════════════════════════════════════╝ \n")
			          
			leia(opcao)

			se(opcao == "1" ou opcao == "2"){
				opcaoInt = t.cadeia_para_inteiro(opcao, 10)
				pare
			}
			senao{
				escreva("Valor informado está errado!\n")
				u.aguarde(1000)
			}
	     }

		escolha(opcaoInt){
			caso  1:
			comercarJogo()
			pare
			caso  2:
			escreva("Obrigado por não ter jogado")
			pare
		}//escolha
		
		
	}// fim funcao incicio

	funcao comercarJogo(){
		
		para(numeroDias = numeroDias; numeroDias <= 100; numeroDias++){

			time_leite = 0
			energia = 100
			dormir = 0

			FomeAnimais(racao_vaca)
			FomeAnimais(racao_touro)
			FomeAnimais(racao_jegue)
			FomeAnimais(racao_jumenta)
				
			se (numeroDias == 0 ){
				limpa()
				escreva("A história começa no começo dos anos 40, quando a Segunda Guerra Mundial começou.")
				u.aguarde(4500)
				limpa()
				escreva("Você é apenas um fazendeiro, tentando ganhar dinheiro com sua fazenda, já que a situação do mundo não ajuda em sua condição financeira.")
				u.aguarde(8000)
				limpa()
				escreva("Atualmente, você tem tentado fazer dinheiro vendendo leite de cabra e vaca, ovos e carne...")
				u.aguarde(5000)
				limpa()
				escreva("Porém, os seus animais ficam doentes muito facilmente e por causa disso, muitos deles morrem. O que você irá fazer pra acabar com esse problema?")
				u.aguarde(8000)
				limpa()
				escreva("Boa Sorte!")
				u.aguarde(3000)
				limpa()
				
			}//se
			enquanto(energia > 0 e dormir == 0){
				enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"){
					escreva("╔═══════════════════════════════════════════════════════════╗ \n")
					escreva("║                                                           ║ \n")
					escreva("║                O que deseja fazer hoje?                   ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                    Escolha uma opção:                     ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     1_ Mercado                            ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     2_ Animais                            ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     3_ Consumir Alimentos                 ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     4_ Dormir                             ║ \n")
					escreva("║                                                           ║ \n")
					escreva("╚═══════════════════════════════════════════════════════════╝ \n")
					leia(opcao)
	
					
					se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
							pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
				 }
				escolha(opcaoInt){
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
						dormir = 1
					pare
					
				}//escolha açoes do dia
				
			}//energia
										
		}//para
		inicio_animacao()
	
	} // fim da funcao comercarJogo

	funcao Mercado(){
					enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
						escreva("╔═══════════════════════════════════════════════════════════╗ \n")
						escreva("║                                                           ║ \n")
						escreva("║               Escolha o que deseja comprar                ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     1_ Animais                            ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     2_ Alimento                           ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     3_ Sementes                           ║ \n")
						escreva("║                                                           ║ \n")
						escreva("╚═══════════════════════════════════════════════════════════╝ \n")
						leia(opcao)

						se(opcao == "1" ou opcao == "2"  ou opcao == "3"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
							pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
				 }

					escolha(opcaoInt){
						caso 1:
							 MercadoAnimais()
						pare
						caso 2:
							MercadoAlimento()
						pare
						caso 3:
							MercadoSemente()
						pare
					}//escolha mercado
	}//funcao Mercado

		funcao MercadoAnimais(){
						enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"){
							escreva("╔═══════════════════════════════════════════════════════════╗ \n")
							escreva("║                                                           ║ \n")
							escreva("║              Escolha um animal para comprar:              ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      1_ Vaca                              ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      2_ Touro                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      3_ Jegue                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      4_ Jumenta                           ║ \n")
							escreva("║                                                           ║ \n")
							escreva("╚═══════════════════════════════════════════════════════════╝ \n")
							leia(opcao)
	
							se(opcao == "1" ou opcao == "2"  ou opcao == "3"  ou opcao == "4"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
						 }
						
						escolha(opcaoInt){
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
						}// fim da escolha animal
		} //fim da funcao MercadoAnimais
	
		funcao MercadoAlimento(){
						enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9" ou opcao != "10" ou opcao != "11" ou opcao != "12"){
							escreva("╔═══════════════════════════════════════════════════════════╗ \n")
							escreva("║                                                           ║ \n")
							escreva("║            Escolha um alimento para comprar:              ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                  1_ Carne de Gato                         ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                 2_ Carne de Cachorro                      ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                   3_ Carne de Boi                         ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                     4_ Verduras                           ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      5_ Frutas                            ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      6_ Cereais                           ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                       7_ Água                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      8_ Leite                             ║\n")
							escreva("║                                                           ║ \n")
							escreva("║                       9_ Suco                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                10_ Ração Barata (3 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                 11_ Ração Média (5 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                  12_ Ração Cara (7 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("╚═══════════════════════════════════════════════════════════╝ \n")
							leia(opcao)
							
							se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9" ou opcao == "10" ou opcao == "11" ou opcao == "12"){
								opcaoInt = t.cadeia_para_inteiro(opcao, 10)
							}
							senao{
								escreva("Valor informado está errado!\n")
							}
						}
	
						escolha(opcaoInt){
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
								AbreviarMercado(valor_leite, leite)
							pare
							
							caso 9:
								AbreviarMercado(valor_suco, suco)
							pare
							
							
							caso 10:
								AbreviarMercado(valor__racao_barata, racao_barata)
							pare
							
							caso 11:
								AbreviarMercado(valor__racao_media, racao_media)
							pare
							
							
							caso 12:
								AbreviarMercado(valor__racao_cara, racao_cara)
							pare					
						}//escolha alimentos
		}//fim mercado alimento
	
		funcao MercadoSemente(){
		
	}//funcao mercado alimento

	funcao Venda(){
		enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
						escreva("╔═══════════════════════════════════════════════════════════╗ \n")
						escreva("║                                                           ║ \n")
						escreva("║                Escolha o que deseja vender                ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     1_ Animais                            ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     2_ Alimento                           ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                     3_ Sementes                           ║ \n")
						escreva("║                                                           ║ \n")
						escreva("╚═══════════════════════════════════════════════════════════╝ \n")
						leia(opcao)

						se(opcao == "1" ou opcao == "2"  ou opcao == "3"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
							pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
				 }

					escolha(opcaoInt){
						caso 1:
							 VendaAnimais()
						pare
						caso 2:
							VendaAlimento()
						pare
						caso 3:
							VendaSemente()
						pare
					}
	}//funcao Venda

		funcao VendaAnimais(){
	
			enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"){
							escreva("╔═══════════════════════════════════════════════════════════╗ \n")
							escreva("║                                                           ║ \n")
							escreva("║              Escolha um animal para vender:               ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                     1_ Vaca                               ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                     2_ Touro                              ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                     3_ Jegue                              ║ \n")
							escreva("║                                                           ║\n")
							escreva("║                     4_ Jumenta                            ║ \n")
							escreva("║                                                           ║ \n")
							escreva("╚═══════════════════════════════════════════════════════════╝ \n")
							leia(opcao)
	
							se(opcao == "1" ou opcao == "2"  ou opcao == "3"  ou opcao == "4"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
						 }
						
						escolha(opcaoInt){
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
						}// fim da escolha animal
			
		}//funcao VendaAnimais
	
		funcao VendaAlimento(){
	
			enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9" ou opcao != "10" ou opcao != "11" ou opcao != "12"){
							escreva("╔═══════════════════════════════════════════════════════════╗ \n")
							escreva("║                                                           ║ \n")
							escreva("║             Escolha um alimento para vender:              ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                  1_ Carne de Gato                         ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                 2_ Carne de Cachorro                      ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                   3_ Carne de Boi                         ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                     4_ Verduras                           ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      5_ Frutas                            ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      6_ Cereais                           ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                       7_ Água                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                      8_ Leite                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                       9_ Suco                             ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                10_ Ração Barata (3 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                 11_ Ração Média (5 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("║                  12_ Ração Cara (7 Dias)                  ║ \n")
							escreva("║                                                           ║ \n")
							escreva("╚═══════════════════════════════════════════════════════════╝ \n")
							leia(opcao)
							
							se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9" ou opcao == "10" ou opcao == "11" ou opcao == "12"){
								opcaoInt = t.cadeia_para_inteiro(opcao, 10)
							}
							senao{
								escreva("Valor informado está errado!\n")
							}
						}
	
						escolha(opcaoInt){
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
								AbreviarVenda(valor_leite, leite)
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
						}//escolha alimento
			
		}//funcao VendaAlimento
	
		funcao VendaSemente(){
			
		}//funcao VendaSemente

	funcao Animais(){
				enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"){
					limpa()
					escreva("╔═══════════════════════════════════════════════════════════╗ \n")
					escreva("║                                                           ║ \n")
					escreva("║               Qual animal deseja administrar              ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     Escolha uma opção:                    ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                      1_ Vaca                              ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                      2_ Touro                             ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                      3_ Jegue                             ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                      4_ Jumenta                           ║ \n")
					escreva("║                                                           ║ \n")
					escreva("╚═══════════════════════════════════════════════════════════╝ \n")
					leia(opcao)
				
					se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4"){
						opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						pare
					}
					senao{
						escreva("Valor informado está errado!\n")
					}
				}
				
				escolha(opcaoInt){
						caso 1:
							enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
								limpa()
								escreva("╔═══════════════════════════════════════════════════════════╗ \n")
								escreva("║                                                           ║ \n")
								escreva("║                           Vaca                            ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                    Escolha uma opção:                     ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                       1_ Alimentar                        ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                      2_ Tirar leite                       ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                        3_ Vacinar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("╚═══════════════════════════════════════════════════════════╝ \n")
								leia(opcao)
								
								se(opcao == "1" ou opcao == "2" ou opcao == "3"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
							}

							escolha(opcaoInt){
								caso 1:
									
								pare
								caso 2:
									se(time_leite <= 0){
										leite = leite + vaca
										time_leite++
										escreva("Leite tirado com sucesso!\n")
										u.aguarde(2000)
									}
									senao{
										escreva("Já tirou leite de todas as vacas!\nv")
										u.aguarde(2000)
									}
								pare
								caso 3://add
								pare
							}// escolha vaca
						pare
						caso 2:
							enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
								limpa()
								escreva("╔═══════════════════════════════════════════════════════════╗ \n")
								escreva("║                                                           ║ \n")
								escreva("║                          Touro                            ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                    Escolha uma opção:                     ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                      1_ Alimentar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                        2_ Castrar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                        3_ Vacinar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("╚═══════════════════════════════════════════════════════════╝ \n")
								leia(opcao)
								
								se(opcao == "1" ou opcao == "2" ou opcao == "3"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
							}
							escolha(opcaoInt){
								caso 1:
								pare
								caso 2:
								pare
								caso 3:
								pare
							}//escolha touro
						pare
						caso 3:
							enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
								limpa()
								escreva("╔═══════════════════════════════════════════════════════════╗ \n")
								escreva("║                                                           ║ \n")
								escreva("║                          Jegue                            ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                    Escolha uma opção:                     ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                       1_ Alimentar                        ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                         2_ Montar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                        3_ Vacinar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("╚═══════════════════════════════════════════════════════════╝ \n")
								leia(opcao)
								
								se(opcao == "1" ou opcao == "2" ou opcao == "3"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
							}
							
							escolha(opcaoInt){
								caso 1:
								pare
								caso 2:
								pare
								caso 3:
								pare
							}//escolha jegue
						pare
						caso 4:
							enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4"){
								limpa()
								escreva("╔═══════════════════════════════════════════════════════════╗ \n")
								escreva("║                                                           ║ \n")
								escreva("║                         Jumenta                           ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                    Escolha uma opção:                     ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                       1_ Alimentar                        ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                         2_ Montar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                      3_ Tirar leite                       ║ \n")
								escreva("║                                                           ║ \n")
								escreva("║                        4_ Vacinar                         ║ \n")
								escreva("║                                                           ║ \n")
								escreva("╚═══════════════════════════════════════════════════════════╝ \n")
								leia(opcao)
							
								se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4"){
									opcaoInt = t.cadeia_para_inteiro(opcao, 10)
									pare
								}
								senao{
									escreva("Valor informado está errado!\n")
								}
							}
								
							escolha(opcaoInt){
								caso 1:
								pare
								caso 2:
								pare
								caso 3:
								pare
								caso 4:
								pare
							}//escolha jumenta
						pare
					
					}//administrar animais
		}//funcao Animais

	funcao ConsumirAlimentos(){

		enquanto(opcao != "1" ou opcao != "2" ou opcao != "3" ou opcao != "4" ou opcao != "5" ou opcao != "6" ou opcao != "7" ou opcao != "8" ou opcao != "9"){
						escreva("╔═══════════════════════════════════════════════════════════╗ \n")
						escreva("║                                                           ║ \n")
						escreva("║               Escolha um algo para ingerir:               ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                   1_ Carne de Gato                        ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                  2_ Carne de Cachorro                     ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                    3_ Carne de Boi                        ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                      4_ Verduras                          ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                       5_ Frutas                           ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                       6_ Cereais                          ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                        7_ Água                            ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                       8_ Leite                            ║ \n")
						escreva("║                                                           ║ \n")
						escreva("║                        9_ Suco                            ║ \n")
						escreva("║                                                           ║ \n")
						escreva("╚═══════════════════════════════════════════════════════════╝ \n")
						leia(opcao)
						
						se(opcao == "1" ou opcao == "2" ou opcao == "3" ou opcao == "4" ou opcao == "5" ou opcao == "6" ou opcao == "7" ou opcao == "8" ou opcao == "9"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
					}

					escolha(opcaoInt){
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
							AbreviarConsumo(55, leite)
						pare
						
						caso 9:
							AbreviarConsumo(50, suco)
						pare				
					}//escolha alimentos
		
	}// funcao ConsumirAlimentos

	funcao AbreviarMercado(real x, inteiro y){

               escreva("Quantos animais você deseja comprar? \n")
			leia(quantidade)
			escreva("Compra reultará em: ", quantidade * x)
			escreva("\n Deseja comprar? \n")
			escreva("1_  sim \n")
			escreva("2_  não \n")
			leia(opcao)
			
			enquanto(opcao != "1" ou opcao != "2"){
				se(opcao == "1" ou opcao == "2"){
					opcaoInt = t.cadeia_para_inteiro(opcao, 10)
				pare
				}
				senao{
					escreva("Valor informado está errado!\n")
				}
			}
			
			
			escolha(opcaoInt){
				caso 1:
					se(quantidade * x <= dinheiro e energia >= 15){
						limpa()
						y = y + quantidade
						energia = energia - 15
						dinheiro = dinheiro - (quantidade * x)
						escreva("Compra realizada com sucesso!\n")
						u.aguarde(2000)
					}
					senao se(energia < 15){
						limpa()
						escreva("Compra negada, energia baixa!\n")
						u.aguarde(2000)
					}
					senao{
						limpa()
						escreva("Compra negada\n")
						u.aguarde(2000)
					}
					pare
				caso 2:
					limpa()
					escreva("Compra negada\n")
					u.aguarde(2000)
					}//fim escolha compra
		
		}//funcao AbreviarMercado

	funcao AbreviarVenda(real x, inteiro y){

			escreva("Quantos animais você deseja vender? \n")
			leia(quantidade)
			escreva("Venda reultará em: ", quantidade * x)
			escreva("\n Deseja comprar? \n")
			escreva("1_  sim \n")
			escreva("2_  não \n")
			leia(opcao)
			
			enquanto(opcao != "1" ou opcao != "2"){
				se(opcao == "1" ou opcao == "2"){
					opcaoInt = t.cadeia_para_inteiro(opcao, 10)
				pare
				}
				senao{
					escreva("Valor informado está errado!\n")
				}
			}
			
			
			escolha(opcaoInt){
				caso 1:
					se(quantidade >= x e energia >= 15){
						limpa()
						y = y - quantidade
						energia = energia - 15
						dinheiro = dinheiro + (quantidade * x)
						escreva("Venda realizada com sucesso!\n")
						u.aguarde(2000)
					}
					senao se(energia < 15){
						limpa()
						escreva("Compra negada, energia baixa!\n")
						u.aguarde(2000)
					}
					senao{
						limpa()
						escreva("Compra negada\n")
						u.aguarde(2000)
					}
					pare
				caso 2:
					limpa()
					escreva("Venda negada\n")
					u.aguarde(2000)
					}//fim escolha compra
		
		}//funcao AbreviarVenda
	
	funcao AbreviarConsumo(inteiro x, inteiro y){

			escreva("Quantos deste alimento você deseja consumir?? \n")
			leia(quantidade)
			escreva("Consumo reultará em: ", y)
			escreva("\n Deseja consumir? \n")
			escreva("1_  sim \n")
			escreva("2_  não \n")
			leia(opcao)
			
			enquanto(opcao != "1" ou opcao != "2"){
				se(opcao == "1" ou opcao == "2"){
					opcaoInt = t.cadeia_para_inteiro(opcao, 10)
				pare
				}
				senao{
					escreva("Valor informado está errado!\n")
				}
			}
			
			
			escolha(opcaoInt){
				caso 1:
					se(quantidade <= y){
						limpa()
						y = y - quantidade
						energia = energia + (quantidade * x)
						escreva("Consumo realizado com sucesso!\n")
						u.aguarde(2000)
					}
					senao{
						limpa()
						escreva("Consumo negado\n")
						u.aguarde(2000)
					}
					pare
				caso 2:
					limpa()
					escreva("Consumo negado\n")
					u.aguarde(2000)
					}//fim escolha compra
		
		}//funcao AbreviarVenda

	funcao AlimentarAnimais(real x, inteiro y){

			enquanto(opcao != "1" ou opcao != "2" ou opcao != "3"){
					limpa()
					escreva("╔═══════════════════════════════════════════════════════════╗ \n")
					escreva("║                                                           ║ \n")
					escreva("║              Qual animal deseja administrar               ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                    Escolha uma opção:                     ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     1_ Ração Cara                         ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     2_ Ração Média                        ║ \n")
					escreva("║                                                           ║ \n")
					escreva("║                     3_ Ração Barata                       ║ \n")
					escreva("║                                                           ║ \n")
					escreva("╚═══════════════════════════════════════════════════════════╝ \n")
					leia(opcao)
				
					se(opcao == "1" ou opcao == "2" ou opcao == "3"){
						opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						pare
					}
					senao{
						escreva("Valor informado está errado!\n")
					}
				}
				
				
			escolha(opcaoInt){
				caso 1:
					escreva("Quantas desta rações você deseja usar para alimentar este animal?? \n")
					leia(quantidade)
					escreva("Reultará em: ", y)
					escreva("\n Deseja alimentar? \n")
					escreva("1_  sim \n")
					escreva("2_  não \n")
					leia(opcao)
					
					enquanto(opcao != "1" ou opcao != "2"){
						se(opcao == "1" ou opcao == "2"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
					}
					
					
					escolha(opcaoInt){
						caso 1:
							se(quantidade <= y){
								limpa()
								y = y - quantidade
								energia = energia - (quantidade * 10)
								x = x + (0.25)
								escreva("Alimentação realizada com sucesso!\n")
								u.aguarde(2000)
							}
							senao{
								limpa()
								escreva("Alimentação negada\n")
								u.aguarde(2000)
							}
							pare
						caso 2:
							limpa()
							escreva("Alimentação negada\n")
							u.aguarde(2000)
							}//fim escolha compra
				pare
				caso 2:
					escreva("Quantas desta rações você deseja usar para alimentar este animal?? \n")
					leia(quantidade)
					escreva("Reultará em: ", y)
					escreva("\n Deseja alimentar? \n")
					escreva("1_  sim \n")
					escreva("2_  não \n")
					leia(opcao)
					
					enquanto(opcao != "1" ou opcao != "2"){
						se(opcao == "1" ou opcao == "2"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
					}
					
					
					escolha(opcaoInt){
						caso 1:
							se(quantidade <= y){
								limpa()
								y = y - quantidade
								energia = energia - (quantidade * 10)
								x = x + (0.1)
								escreva("Alimentação realizada com sucesso!\n")
								u.aguarde(2000)
							}
							senao{
								limpa()
								escreva("Alimentação negada\n")
								u.aguarde(2000)
							}
							pare
						caso 2:
							limpa()
							escreva("Alimentação negada\n")
							u.aguarde(2000)
							}//fim escolha compra
				pare
				caso 3:
					escreva("Quantas desta rações você deseja usar para alimentar este animal?? \n")
					leia(quantidade)
					escreva("Reultará em: ", y)
					escreva("\n Deseja alimentar? \n")
					escreva("1_  sim \n")
					escreva("2_  não \n")
					leia(opcao)
					
					enquanto(opcao != "1" ou opcao != "2"){
						se(opcao == "1" ou opcao == "2"){
							opcaoInt = t.cadeia_para_inteiro(opcao, 10)
						pare
						}
						senao{
							escreva("Valor informado está errado!\n")
						}
					}
					
					
					escolha(opcaoInt){
						caso 1:
							se(quantidade <= y){
								limpa()
								y = y - quantidade
								energia = energia - (quantidade * 10)
								x = x + (0.05)
								escreva("Alimentação realizada com sucesso!\n")
								u.aguarde(2000)
							}
							senao{
								limpa()
								escreva("Alimentação negada\n")
								u.aguarde(2000)
							}
							pare
						caso 2:
							limpa()
							escreva("Alimentação negada\n")
							u.aguarde(2000)
							}//fim escolha compra
				pare
			}//escolha ração			
		}//alimentar animais

	funcao FomeAnimais(real y){
			se(y != 1.0){
				y = y - 0.05
			}
		}//funcao Fome Animais
		
	funcao inicio_animacao()
	{
		inteiro coluna_inicial = 0
		inteiro passos = 10//23
		
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
	}
     //movimentaçao
	funcao desenhar_pato(inteiro coluna, inteiro andando)
	{
		escreva("\n")
		se (andando == 0)
		{
			branco_coluna_cima((coluna * 3) + 7)
			escreva(" (.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo((coluna * 3) + 5)
			escreva("..\\___)..\\___)..\\___)..\\___).")
		} 
		senao
		{
			branco_coluna_cima((coluna * 3) + 6)
			branco_coluna_cima(4)
			escreva("(.)>   (.)>   (.)>   (.)>\n")
			branco_coluna_baixo((coluna * 3) + 6)
			escreva("..\\___)..\\___)..\\___)..\\___).")
		}
		escreva("\n")
		final()
	}
     //pula espaços no inicio
	funcao branco_coluna_baixo(inteiro quant)
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			escreva(".")
			brancos++
		}
	}
	funcao branco_coluna_cima(inteiro quant)
	{
		inteiro brancos = 1
		enquanto (brancos <= quant)
		{
			escreva(" ")
			brancos++
		}
	}
	funcao final(){
		escreva(" ┌┬┐┬ ┬┬┌┬┐┌─┐ ┌─┐┌┐ ┬─┐┬┌─┐┌─┐┬┐┌─┐ ┌─┐┌─┐┬─┐ ┌┬┐┌─┐┬─┐  ┬┌─┐┌─┐┌─┐┬┐┌─┐\n")  
          escreva(" ││││ ││ │ │ │ │ │├┴┐├┬┘││ ┬├─┤│││ │ ├─┘│ │├┬┘  │ ├┤ ├┬┘  ││ ││ ┬├─┤│││ │\n")
          escreva(" ┴ ┴└─┘┴ ┴ └─┘ └─┘└─┘┴└─┴└─┘┴ ┴┴┘└─┘ ┴  └─┘┴└─  ┴ └─┘┴└─ └┘└─┘└─┘┴ ┴┴┘└─┘")
	}
//programa 
}
