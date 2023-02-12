<!-- Este documento é mais para quem ja tem um previo conhecimento em desenvolvimento -->
<!-- 
                            Documento feito por: Wesley de Lima Costa 

                                          Sobre mim
                                              V
                                Estudante da São Paulo Tech School
                            Curso: Analíse e Desenvolvimento de Sistemas

 -->

 <?php
/////////////////////////////////////////////////////////////////
                    // Dados basicos
 
 $Nome = "Wesley";
 $Site = 'www.uol.com.br';

 $Ano = 2004; 
 $Salario = 3380.50;
 $Bloqueado = false;

/////////////////////////////////////////////////////////////////
                    // Dados Compostos

$frutas = array("Abacaxi", "Uva", "Pera");

// Lembre-se que um usuario comum conta sempre pelo 1, já você, é um desenvolvedor! Conte pelo 0!!!

echo "1. " . $frutas[0]. "<br> 2. " . $frutas[1] . "<br>3. " . $frutas[2] . "<br> " ;

// Quando este operador fica vazio ele automaticamente pega a data de agora
$nascimento = new DateTime();

// var_dump($nascimento);

$arquivo = fopen("Inicio.php" , "r");

// var_dump($arquivo);

$nulo = NULL;



// Proxima pagina variaveis-Pré-Definidas.php


