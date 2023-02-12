<!-- Este documento é mais para quem ja tem um previo conhecimento em desenvolvimento -->

<!-- 
                            Documento feito por: Wesley de Lima Costa 

                                          Sobre mim
                                              V
                                Estudante da São Paulo Tech School
                            Curso: Analíse e Desenvolvimento de Sistemas

 -->



<?php

//////////////////////////////////////////////////////////
                //Variaveis Pré-Definidas

$nome = (int)$_GET["a"];      

//var_dump($nome);



// $ip = $_SERVER["REMOTE_ADDR"]; // Esse é um exemplo de como pegar o ip do usuario quando ele acessa a page

$ip = $_SERVER["SCRIPT_NAME"]; // Aqui é praticamente a mesma coisa mas mostra o diretorio

echo $ip;


// Proxima pagina Functions.php