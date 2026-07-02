
<!-- AULA 10 FOR !!!!!!!! -->
<?php

$frutas = ["Laranja", "Morango","Melancia","Limão","Goiaba","Amora","Tangerina"];
$dias = ["Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo"];

// for($i=0; $i < sizeof($dias); $i++){ // esse for é tradicional
//     echo '<br>' . $dias[$i] . "vou comer: ".$frutas[$i];
// }

//foreach() para cada elemento da lista 
//para cada elemento dessa varíavel como item print item
foreach( $frutas as $item){ ///para cada oque vai pegar cada elemento e vai jogar na variavel item e printa ela
    echo "<br>" .$item; /// joga a variável item e printa ela
}
?>
<html>
<body>
    <table>
        <th>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </th>    
        <tr> 
            <td> 1 </td>
            <td> Thiago </td>
            <td> thiago@gmail.com </td>
        </tr> 
    </table>
</body>
</html>

