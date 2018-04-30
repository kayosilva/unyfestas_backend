<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function indexAction(Request $request)
    {
        $teste = $request->all();

        return response()
            ->json([
                'result' => $teste
            ]);
    }
}
