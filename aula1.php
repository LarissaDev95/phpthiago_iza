<?php
//echo é equivalente ao print no python
echo 'hellow world';
echo '<br>'; // significa que ele está renderizando  br estou mandando uma tag html que quebra a linha
echo '<h1> Carioca</h1>'; // você consegue manipular 
echo 'a';

print("<br>ok");

print_r("akakaka");  // vai usar muito para fazer função para debug

//FUNÇÃO PARA DEBUG
$variavel = 10;
var_dump($variavel);

/// criando uma variável
$a = 10;
$b = 20;
$res = $a * $b;
print($res);  // não vai usar o print vamos usar mais o echo
// variavis dinamicas tipagem fraca, muda de valor 
$x = 400;
$y = 150;
$res2 = $x / $y;
echo '<br> ' . $res2;
$a = "thiago";
echo "<br> valor de A: " . $a;

/// o php é igual o js

//vetor é uma variavel que é um vetor
$variavel =[10,20,30,"THIAGO"] /// isso é um arrey com varios valores dentro


?>