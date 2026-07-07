<?php
$dados = [
    [
        "id" => 1,
        "nome" => "Thiago"
    ],
    [
        "id" => 2,
        "nome" => "kill"
    ],
    [
        "id" => 3,
        "nome" => "iza"
    ],
];
// print_r($dados[0]["nome"]);

$dados_json = json_encode($dados);

foreach($dados as $user){
    echo $user['id'] . " : " . $user['nome'] ."<br>";
}

for($i=0; $i < sizeof($dados); $i++){
    echo "<br>". $dados[$i]["id"] . " : " . $dados[$i]["nome"];
}
$i = 0;

while($i < sizeof($dados)){
    echo "<br>" . $dados[$i]['nome'] . $dados[$i]['id'];
    $i++;
}

echo "<br>";
echo $dados_json;
echo "<br>" . gettype($dados_json);
?>