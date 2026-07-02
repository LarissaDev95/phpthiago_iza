<?php

//Compreender o conseito de chave valor

$dados = [ ///voce tem um array que tem outro array que é um array associativo
    //é um array que na posicão 0 tem outro array é um array de array
    [// ele é associativo porque ele associa essa informação de trás com a da frente
        "id" => 1,
        "nome" => "Thiago"
    ],
    
    [
        "id" => 2,
        "nome" => "Kill"
    ],
    
    [
        "id" => 3,
        "nome" => "Iza"
    ],
    
    ];

$dados__json = json_encode($dados);

foreach($dados as $user){// vai interar o que veio de resposta//// para cada ele é um interador ele vai contar automaticamente cada posição
    echo $user['id'] . " : " . $user['nome'] . "<br>"; // quero mostrar ela na chave id e concatenar com a chave nome
}

for($i=0; $i < sizeof($dados); $i++){ // quando você tem  
    echo "<br>". $dados[$i]["id"] . " : " . $dados[$i]["nome"];
}

$i = 0;

while($i < sizeof($dados)){
    echo "<br>" . $dados[$i]['nome'] . $dados[$i]['id'];
    $i++;
}

echo"<br>";
echo $dados__json;
echo "<br>". gettype($dados__json);


?>

<!-- Depoiis vamos aprender a usar um array de objetos -->
<!-- E aprender a usar um post -->