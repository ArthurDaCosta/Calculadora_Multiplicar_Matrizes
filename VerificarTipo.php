<?php

function VerificarTipoMatriz(int $Linha, int $Coluna) {
    if ($Linha === $Coluna){
        return 'quadrada';
    } else{
        return 'retangular';
    }
}