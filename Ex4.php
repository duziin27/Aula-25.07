
<?php
//4 - Crie uma função que receba uma lista de números e retorne o segundo maior número. A função aceita uma lista como um argumento. [2,1,3,4,5,6,6,8,9,10] = 9 [2,1,3,4,5,60,6,38,9,10] = 38

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function segundomaior($array){

    rsort($array);
    echo $array[1];

}

echo segundomaior($lista);

?>