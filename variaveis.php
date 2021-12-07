<?php

$texto = "texto comum";
$inteiro = 9;
$casaDecimal = 10.56;
#DEBUGAR - Verificar o que está acontecendo no código
# var_dump();
var_dump($texto);
echo "<br>";
var_dump($inteiro);
echo "<br>";
var_dump($casaDecimal);

/*

    TIPOS DE VARIÁVEIS

    $idade -> você espera que o conteúdo seja um número
    $nomeDoAluno ->  você espera que o conteúdo seja um texto(string)
    o PHP não necessita  da declaração do tipo da variável - 
    alguns programadores (principalmente os que usam JAVA) falam
    que o PHP é "FRACAMENTE TIPADO"
    no JAVA  ->  int idade = 18;
                 String nome = "juan";
                 nome = 123.54;
                 erro o programa trava
*/