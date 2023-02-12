<!-- Este documento é mais para quem ja tem um previo conhecimento em desenvolvimento -->

<!-- 
                            Documento feito por: Wesley de Lima Costa 

                                          Sobre mim
                                              V
                                Estudante da São Paulo Tech School
                            Curso: Analíse e Desenvolvimento de Sistemas

 -->

 <!-- Aqui está alguns exemplos de como funciona as functions em php -->

<?php

/* Note que foi criada uma variavel chamada $nome
essa variavel, quando feita em javascript, automaticamente se torna global mas aqui no php é diferente.
Caso você tente ultilizar essa variavel em uma function não vai dar certo pois é como se ela não existisse
dentro da função.
"Ta mas como resolver isso?" : A resposta é simples, basta ultilizar o "global"
Exemplo:  global $nomedavariavel, assim ele consegue ler a variavel com o valor armazenado

*/
// Exemplo 1

$nome = "wesley";

function teste(){
    global $nome;
    echo "$nome <br>";
}
// Exemplo 2
/* Aqui está um exemplo de se caso você queira manter o nome da variavel mas alterar seu valor,
neste exemplo criei novamente a variavel $nome e alterei seu valor 
assim não conflitando com a primeira function

*/
function teste2(){
    $nome = "João";
    echo "Agora no teste 2 $nome";
}

// Chamando a function;
teste();
teste2();


