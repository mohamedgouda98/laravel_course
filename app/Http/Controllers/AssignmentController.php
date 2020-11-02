<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function evenize() {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $evenizedNumbers = array_map(function($number) {
            return $number % 2 == 0 ? $number : $number + 1;
        }, $numbers);

        return response()->json([
            'oldArray' => $numbers,
            'evenizedArray' => $evenizedNumbers,
            'differenceDictionary' => array_combine($numbers, $evenizedNumbers)
        ]);
    }
}
