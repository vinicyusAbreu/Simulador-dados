<?php
function dadosAleatorios($qtd_dados, $qtd_lados)
{
    $qtd_lados = substr($qtd_lados, 1);

    $dados = [];

    for ($i = 0; $i < $qtd_dados; $i++) {
        $dados[] = rand(1, $qtd_lados);
    }
    $total = array_sum($dados);

    return [$dados, $total];
}