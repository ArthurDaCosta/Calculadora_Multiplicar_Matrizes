<?php

function VerificarTipoMatriz(int $linha, int $coluna) {
    if ($linha === $coluna){
        return 'quadrada';
    } else{
        return 'retangular';
    }
}