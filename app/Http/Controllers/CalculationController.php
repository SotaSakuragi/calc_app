<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    // public function calculation($value1, $operator, $value2)
    // {
    //     return view(
    //         'message.calculation',
    //         [
    //             'value1' => $value1,
    //             'operator' => $operator,
    //             'value2' => $value2
    //         ]
    //     );
    // }


    public function calculation($value1, $operator, $value2)
    {
        $result = 0;

        if ($operator == 'addition') {
            $result = $value1 + $value2;
        }

        elseif ($operator == 'subtraction') {
            $result = $value1 - $value2;
        } 

        elseif ($operator == 'multiplication') {
            $result = $value1 * $value2;
        } 

        elseif ($operator == 'multiplication') {
            $result = $value1 / $value2;
        } 

        else {
            $result = 'error';
        }

        return view(
            'message.calculation',
            [
                'result' => $result
            ]
        );
    }
}
