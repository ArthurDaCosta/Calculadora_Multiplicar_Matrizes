<?php 

function calculoMatrizQuad(array $Matriz1, array $Matriz2): array
{
    $contadorColuna=0;
    for($x=0; $x<count($Matriz1); $x++){
        $MatrizCalculo[$x][$contadorColuna] = [];
        for($y= 0; $y<count($Matriz2[$x]); $y++){
            $MatrizCalculo[$x][$y]=$Matriz1[$x][$y]*$Matriz2[$y][$x];
        }
        if ($contadorColuna<count(array_keys($Matriz2))){
            $contadorColuna++;
        } else{
            $contadorColuna=0;
        }
    }

    return $MatrizCalculo;
}