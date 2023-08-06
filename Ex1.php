<?php
//1 - Crie uma função que retorne “true” se uma string contiver espaços. A função aceita o String como um argumento.

$frase = ("Frasecomespaço");

if(str_contains($frase, ' ')){
   echo "Essa frase contém espaço :D";
    }
   else{ 
   echo "Essa frase não contém espaço :(";
}
?>