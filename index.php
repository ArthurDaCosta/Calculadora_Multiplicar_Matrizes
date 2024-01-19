<?php

require_once __DIR__ ."/variables.php";
require_once __DIR__ ."/constants.php";
require_once __DIR__ ."/matrizesStart.php";
require_once __DIR__ ."/VerificarTipo.php";
require_once __DIR__ ."/calcQuad.php";
require_once __DIR__ ."/calcNQuad.php";
require_once __DIR__ ."/printMatriz.php";

$Linha = (int) readline (" Qual a quantidade de Linhas da Matriz 1: ");
$Coluna = (int) readline (" Qual a quantidade de Colunas da Matriz 1: ");
echo " Complete a Matriz 1: \n";
$Matriz1 = matrizesPreencher($Linha, $Coluna);
$TipoMatriz1 = VerificarTipoMatriz($Linha, $Coluna);

$Linha = (int) readline ("\n Qual a quantidade de Linhas da Matriz 2: ");
$Coluna = (int) readline (" Qual a quantidade de Colunas da Matriz 2: ");
echo " Complete a Matriz 2: \n";
$Matriz2 = matrizesPreencher($Linha, $Coluna);
$TipoMatriz2 = VerificarTipoMatriz($Linha, $Coluna);

if ($TipoMatriz2!="quadrada"||$TipoMatriz2!="quadrada"){
    $calculo = calculoMatrizNQuad($Matriz1, $Matriz2);
} else{
    $calculo = calculoMatrizQuad($Matriz1, $Matriz2);
}
    
printMatriz($calculo);


