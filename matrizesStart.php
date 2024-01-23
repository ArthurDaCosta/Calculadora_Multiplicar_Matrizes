<?php

function matrizesPreencher(int $linha, int $coluna): array
{
    for($x=0; $x<$linha; $x++) {
        $matriz[$x]=[];
        for($y=0; $y<$coluna; $y++) {
            $valorMatriz = readline(" Qual o valor da posição [" . $x+1 . "/" . $y+1 . "] da Matriz: ");
            $matriz[$x][$y]=$valorMatriz;
        }
    } 
    return ($matriz);
}