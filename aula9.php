<?php

// $vetor = [10,20,30,40,50,60,70,80,90];

// $i = 0;

// while ( $i < sizeof($vetor) ){
//     //code here
//     echo "<br>" . $vetor[$i];
//     $i += 1;
// }

// vetor é uma lista

$frutas = ["Laranja", "Morango","Melancia","Limão","Goiaba","Amora","Tangerina"];
$dias = ["Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo"];

$i = 0;
while($i < 7){
    echo '<br>' . $dias[$i] . "   " . "vou comer: " . $frutas[$i];
    $i = $i + 1;
}






?>