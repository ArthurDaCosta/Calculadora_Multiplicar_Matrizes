<?php

require_once __DIR__ ."/variables.php";
require_once __DIR__ ."/constants.php";
require_once __DIR__ ."/matrizesStart.php";
require_once __DIR__ ."/VerificarTipo.php";
require_once __DIR__ ."/calcQuad.php";
require_once __DIR__ ."/calcNQuad.php";
require_once __DIR__ ."/printMatriz.php";
require_once __DIR__ ."/repetirCalculo.php";

do{
    echo "\n";
    $Linha = (int) readline (" Qual a Quantidade de Linhas da Matriz 1: ");
    $Coluna = (int) readline (" Qual a Quantidade de Colunas da Matriz 1: ");
    if($Linha<=0||$Coluna<=0){
        echo "\n -- Valor Inválido --";
        echo "\n -- Reiniciando... -- \n";
        continue;
    }
    echo " Complete a Matriz 1: \n";
    $Matriz1 = matrizesPreencher($Linha, $Coluna);
    $TipoMatriz1 = VerificarTipoMatriz($Linha, $Coluna);

    echo "\n";
    $Linha = (int) readline (" Qual a Quantidade de Linhas da Matriz 2: ");
    $Coluna = (int) readline (" Qual a Quantidade de Colunas da Matriz 2: ");
    if($Linha<=0||$Coluna<=0){
        echo "\n -- Valor Inválido --";
        echo "\n -- Reiniciando... -- \n";
        continue;
    }
    if(count($Matriz1[0])!=$Linha){
        echo "\n -- Essas Matrizes Não Podem ser Multiplicadas. --";
        echo "\n -- Reiniciando... -- \n";
        continue;
    }
    echo " Complete a Matriz 2: \n";
    $Matriz2 = matrizesPreencher($Linha, $Coluna);
    $TipoMatriz2 = VerificarTipoMatriz($Linha, $Coluna);

    if ($TipoMatriz2!="quadrada"||$TipoMatriz2!="quadrada"){
        $calculo = calculoMatrizNQuad($Matriz1, $Matriz2);
        echo "\n Matriz Final após Multiplicação com Matriz Retangular: \n";
    } else{
        $calculo = calculoMatrizQuad($Matriz1, $Matriz2);
        echo "\n Matriz Final após Multiplicação de Matrizes Quadradas: \n";
    }

    printMatriz($calculo);
    $Repetir=repetirCalculo();
}while($Repetir==true);

