<?php

function matrizesPreencher(int $Linha, int $Coluna): array
{
    for($x=0; $x<$Linha; $x++) {
        $Matriz[$x]=[];
        for($y=0; $y<$Coluna; $y++) {
            $valorMatriz = readline(" Qual o valor da posição [" . $x+1 . "/" . $y+1 . "] da Matriz: ");
            $Matriz[$x][$y]=$valorMatriz;
        }
    } 
    return ($Matriz);
}