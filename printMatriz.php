<?php

function printMatriz(array $calculo)
{
    for ($x=0; $x<count($calculo); $x++)
    {
        for($y=0; $y<count($calculo[0]); $y++){
            echo " |" . $calculo[$x][$y] . "|";
        }
        echo "\n";
    }
}
    