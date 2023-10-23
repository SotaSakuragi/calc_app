<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function calculation($value1, $operator, $value2)
    {
        return view(
            'message.calculation',
            [
                'value1' => $value1,
                'operator' => $operator,
                'value2' => $value2
            ]
        );
    }
}
