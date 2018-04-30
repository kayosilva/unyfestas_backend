<?php

namespace App\Service;

/**
 * Class Calculate
 *
 * @package App\Service
 * @author Ledson Silva <ledson.dev@gmail.com>
 */
class Calculate
{
    public function handler(int $adultos, int $criancas, string $bebidas)
    {
        // Inicializa com zero as bebidas
        $cerveja = 0;
        $whisky = 0;

        // Calcula os salgados, doces, carnes e refrigerantes
        $salgados = $adultos * 10;
        $salgados += $criancas * 5;
        $doces = $criancas * 2.5;
        $carnes = ($adultos + $criancas) * (1/6);
        $refrigerante = ($adultos + $criancas) * (1/4);

        // Se tiver bebida faz o calculo da cerveja e whisky
        if ($bebidas === 'yes') {
            $cerveja = $adultos * 4;
            $cerveja -= $criancas * 2;
            $whisky = ($adultos/30) * 1;
        }

        return [
            'salgados' => $salgados,
            'doces' => $doces,
            'carne' => $carnes,
            'refrigerantes' => $refrigerante,
            'cerveja' => $cerveja,
            'whisky' => $whisky
        ];
    }
}