<?php

function repetirCalculo()
{
    return (filter_var(
        readline("\n Deseja realizar um Novo Cálculo(True/False)? "),
        FILTER_VALIDATE_BOOLEAN
    ));
}