<?php 

function calculoMatrizNQuad(array $matriz1, array $matriz2): array
{
    $contadorColuna = 0;
    $contadorLinha = 0;

    for($x=0; $x<count($matriz1); $x++){
        for($y=0; $y<count($matriz2[0]); $y++){
            $soma = 0;
            for($z=0; $z<count($matriz2); $z++){
                $soma += $matriz1[$x][$z]*$matriz2[$z][$y];
            }
            $matrizCalculo[$contadorLinha][$contadorColuna] = $soma;
            if($contadorColuna==(count($matriz2[0])-1)){
                $contadorColuna=0;
                $contadorLinha++;
            } else {
                $contadorColuna++;
            }
        }
    }

    return $matrizCalculo;
}