<?php
//repete string

echo str_repeat(".OoOo.",10);
echo "<hr>";
#caixa alta  upper-case
$nome = "juan pablo";
echo strtoupper($nome);
echo "<hr>";
#lower-Case   str-string   to-para  - lower - caixa baixa
echo strtolower("HOJE ESTAMOS APRENDENDO DIVERSAS FUNÇÔES");

# trocar texto - str replace
echo"<hr>";
$texto = "O rei de roma rico";
echo str_replace("rei","Rainha",$texto);

#primeira letra maiúscula ucfirst(texto)
echo "<hr>";
$func = "ignez freitas";
echo ucfirst($func);
echo "<br>";
echo ucwords($func); //toda primeira letra maiuscula

#Usuario digita o conteúdo tudo errado

echo "<hr>";
$aluno = "juan PABLO Santos"; //letras maiúculas, minúsculas, invertido
echo ucwords(strtolower($aluno));
echo "<br>";
$nome2 = "                    ignez";
echo trim($nome2); //tira o espaço
