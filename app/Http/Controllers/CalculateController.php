<?php

namespace App\Http\Controllers;

use App\Service\Calculate;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function indexAction(Request $request)
    {
        // Service para calcular a festa
        $calculo = new Calculate();

        return response()
            ->json([
                'result' => $calculo->handler(
                    $request->input('adultos'),
                    $request->input('criancas'),
                    $request->input('bebidas')
                )
            ]);
    }
}
