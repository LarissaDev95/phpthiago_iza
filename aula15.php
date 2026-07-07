<?php
$teste = false; // senha incorreta
$flag = true; // usuario ativo no sistema

// operador logico and --> &&
// operador logico or ---> ||

$res = $teste && $flag ? "LOGADO" : "SENHA incorreta OU USUARIO INATIVO";

echo $res;

?>

