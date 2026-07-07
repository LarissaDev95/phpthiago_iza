<?php

    //// void significa que a função não retornar nada!1
    function soma (int $a, int $b) : void{

        echo $a + $b;
    }
    
    function multiplicacao (int $a, int $b) : int{

        return $a * $b;
    }

    $x = 10;
    $y = 20;
    soma($x, $y);

    $res = multiplicacao($x, $y);

?>