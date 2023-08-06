
<?php
//2 - Crie uma função que retorne o produto de todos os inteiros ímpares em uma lista: A função aceita uma lista como um argumento. [1,1,3,2,5,8,4] = 15

$array = [1,2,3,4,5,6,7];
$produto = 1;

foreach ($array as $key => $value) {
    
    if($value % 2 != 0){
        $produto = $produto * $value;
            
    }  
}

?>