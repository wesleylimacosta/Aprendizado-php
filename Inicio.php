<!-- Este documento é mais para quem ja tem um previo conhecimento em desenvolvimento -->

<!-- 
                            Documento feito por: Wesley de Lima Costa 

                                          Sobre mim
                                              V
                                Estudante da São Paulo Tech School
                            Curso: Analíse e Desenvolvimento de Sistemas

 -->


<?php

// Aqui está um exemplo de uma variavel em php
// Exemplo com texto
$variavel = "Exemplo2<br>";
// Exemplo com numero
$variavel2 = 2;

// É recomendado criar variaveis com o padrão CamelCase onde o inicio de cada palavra fica em maiusculo

//var_dump($variavel);

//unset retira o valor de uma variavel

unset($variavel2);

//Exemplo de uso de operadores tenarios

// if($variavel == "Exemplo<br>"){
//     echo $variavel;
// } else {
//     echo "O valor está incorreto";
// } 

/* Concatenação em php É ultilizado . para concatenar, se você tiver um previo conhecimento em Java
sentira uma semelhança, ja que, em Java ultilizamos o +
*/

//Exemplo 1

$Nome = "Wesley";
$Sobrenome = "Lima Costa";
$Idade = 19;

$SobreMim = "Nome: " . $Nome . " " . $Sobrenome . "<br>Idade: " . $Idade;

echo $SobreMim;

// Note aqui que foi ultilizado "" com um espaçamento, isso pelo fato de que sem, ficaria tudo junto.

// Proxima pagina TiposDeDados.php
