<?php

function printMatriz(array $calculo)
{
    for ($x=0; $x<count(array_keys($calculo)); $x++)
    {
        for($y=0; $y<count($calculo[0]); $y++){
            echo " " . $calculo[$x][$y] . "|";
        }
        echo "\n"; 
    }
}
    