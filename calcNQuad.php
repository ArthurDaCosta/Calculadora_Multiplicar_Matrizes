<?php 

function calculoMatrizNQuad(array $Matriz1, array $Matriz2): array
{
    $contadorColuna = 0;
    $contadorLinha = 0;

    for($x=0; $x<count($Matriz1); $x++){
        for($y=0; $y<count($Matriz2[0]); $y++){
            $soma = 0;
            for($z=0; $z<count($Matriz2); $z++){
                $soma += $Matriz1[$x][$z]*$Matriz2[$z][$y];
            }
            $MatrizCalculo[$contadorLinha][$contadorColuna] = $soma;
            if($contadorColuna==(count($Matriz2[0])-1)){
                $contadorColuna=0;
                $contadorLinha++;
            } else {
                $contadorColuna++;
            }
        }
    }

    return $MatrizCalculo;
}