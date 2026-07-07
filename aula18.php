<?php
/// pego os dados do sql da table de produtos
$dados = array(
    [ "id" =>1, "nome" => "teclado" , "preco" => 5.5, "estoque" => 919],
    [ "id" =>2, "nome" => "mouse" , "preco" => 6.5, "estoque" => 09],
    [ "id" =>3, "nome" => "webcam" , "preco" => 7.5, "estoque" => 129],
    [ "id" =>4, "nome" => "fone" , "preco" => 5.8, "estoque" => 100],
    [ "id" =>5, "nome" => "pendrive" , "preco" => 9.5, "estoque" => 99],
);

for($i = 0 ; $i < count($dados); $i++){
   echo "<br> ID: ".$dados[$i]["id"] . "| Produto :" .$dados[$i]["nome"] . "| Preço :" .$dados[$i]["preco"] . "| Estoque :" .$dados[$i]["estoque"];
}


?>