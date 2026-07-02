<!-- É referente a aula 9 -->

<?php

$frutas = ["Laranja", "Morango","Melancia","Limão","Goiaba","Amora","Tangerina"];
$dias = ["Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo"];

$i = 0;

while($i != sizeof($frutas)){
    echo "<br>" . $dias[$i] . "    " . $frutas[$i];
    $i += 1;
}

?>