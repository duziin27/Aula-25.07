<?php
//3 - Crie uma função que receba uma lista de números entre 1 e 10 (excluindo um número) e retorne o número ausente. A função aceita uma lista como um argumento. [1,2,3,4,5,6,8,9,10] = 7 ou [2,1,3,4,5,6,6,8,9,10] = 7

//numero de soma

function numfaltando($verificar){
    $numexemplo = 10;
    $numtotal = 0;
    
    for ($i = 1; $i <= $numexemplo; $i++) { 
        $numtotal = $numtotal + $i;
    }

    $numarray = array_sum($verificar);

    $numausente = $numtotal - $numarray;
    return $numausente;
    
    }

    $numdalista = [1, 2, 3, 4, 5, 6, 8, 9, 10];
    
    echo numfaltando($numdalista);

/*
function numausente($listnum){

    for($i=1; $i <= 10; $i++){
        if(!in_array($i, $listnum)){
            return $i;
        }
    }
}
$listnum = [1,2,3,4,5,7,8,9,10];
echo numausente($listnum);
*/
?>