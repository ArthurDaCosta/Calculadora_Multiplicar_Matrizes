<?php 

function calculoMatrizQuad(array $matriz1, array $matriz2): array
{
    $contadorColuna=0;
    for($x=0; $x<count($matriz1); $x++){
        $matrizCalculo[$x][$contadorColuna] = [];
        for($y= 0; $y<count($matriz2[$x]); $y++){
            $matrizCalculo[$x][$y]=$matriz1[$x][$y]*$matriz2[$y][$x];
        }
        if ($contadorColuna<count(array_keys($matriz2))){
            $contadorColuna++;
        } else{
            $contadorColuna=0;
        }
    }

    return $matrizCalculo;
}