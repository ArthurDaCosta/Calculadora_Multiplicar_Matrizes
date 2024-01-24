<?php

require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/matrizesStart.php";
require_once __DIR__ . "/VerificarTipo.php";
require_once __DIR__ . "/calcNQuad.php";
require_once __DIR__ . "/printMatriz.php";
require_once __DIR__ . "/repetirCalculo.php";

do {
    echo "\n";
    $linha = (int) readline(" Qual a Quantidade de Linhas da Matriz 1: ");
    $coluna = (int) readline(" Qual a Quantidade de Colunas da Matriz 1: ");

    if ($linha <= 0 || $coluna <= 0) {
        echo "\n -- Valor Inválido --";
        echo "\n -- Reiniciando -- \n";
        continue;
    }

    echo " Complete a Matriz 1: \n";
    $matriz1 = matrizesPreencher($linha, $coluna);
    $tipoMatriz1 = VerificarTipoMatriz($linha, $coluna);
    echo "\n";
    $linha = (int) readline(" Qual a Quantidade de Linhas da Matriz 2: ");
    $coluna = (int) readline(" Qual a Quantidade de Colunas da Matriz 2: ");

    if ($linha <= 0 || $coluna <= 0) {
        echo "\n -- Valor Inválido --";
        echo "\n -- Reiniciando -- \n";
        continue;
    } elseif (count($matriz1[0]) != $linha) {
        echo "\n -- Essas Matrizes Não Podem ser Multiplicadas. --";
        echo "\n -- Reiniciando -- \n";
        continue;
    }

    echo " Complete a Matriz 2: \n";
    $matriz2 = matrizesPreencher($linha, $coluna);
    $tipoMatriz2 = VerificarTipoMatriz($linha, $coluna);
    if ($tipoMatriz2 != "quadrada" || $tipoMatriz2 != "quadrada") {
        $calculo = calculoMatrizNQuad($matriz1, $matriz2);
        echo "\n Matriz Final após Multiplicação com Matriz Retangular: \n";
    } else {
        $calculo = calculoMatrizNQuad($matriz1, $matriz2);
        echo "\n Matriz Final após Multiplicação de Matrizes Quadradas: \n";
    }

    printMatriz($calculo);
    $repetir = repetirCalculo();
} while ($repetir == true);
