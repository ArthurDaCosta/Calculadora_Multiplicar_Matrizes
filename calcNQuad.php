<?php 

function calculoMatrizNQuad(array $Matriz1, array $Matriz2): array
{
    $contadorColuna = 0;
    $contadorLinha = 0;
    $soma = 0;
    for($x=0; $x<count($Matriz1); $x++){
        $MatrizCalculo[$contadorLinha][$contadorColuna] = [];
        for($y= 0; $y<count($Matriz2); $y++){
            $soma += $Matriz1[$x][$y]*$Matriz2[$y][$x];
        }
        $MatrizCalculo[$contadorLinha][$contadorColuna] = $soma;
        if ($contadorColuna<count(array_keys($Matriz2))){
            $contadorColuna++;
        } else{
            $contadorColuna=0;
            $ContadorLinha++;
        }
    }

    return $MatrizCalculo;
}