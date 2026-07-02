<?php

$dados = [
    "id" => 1,
    "nome" => "Thiago",
    "email" =>"thiagoalmeida@" // chave / valor
];



print_r($dados);

echo $dados['email'];  // print dados na posição email /// o banco chama json

print_r($dados);
var_dump($dados); //// o print_r não fala qual o tipo dados mas ás vezes você quer saber qual o tipo de dados que está vindo banco

?>