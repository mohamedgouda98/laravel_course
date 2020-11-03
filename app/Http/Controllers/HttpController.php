<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{

    public function data(Request $request){

        if($request->status == 1){
            return 'true';
        }

        return 'false';
    }


    public function task(Request $request){

        /**
         * Request
         * calc even
         * calc ood
         */
        $numbers = [1,2,3,4,5,6,8,9,2,4,6];

        if($request->status == 1){
          $evenCounter = $this->evenNumbers($numbers);
            return 'Total Even Numbers is: ' . $evenCounter;
        }

        $oddCounter = $this->oddNumbers($numbers);

        return 'Total Odd Numbers is: ' . $oddCounter;
    }


    public function evenNumbers($numbers){
        $totalEven = 0 ;
        for($i=0 ; $i < count($numbers); $i++){
            if($numbers[$i] % 2 == 0){
                $totalEven++;
            }
        }
        return $totalEven;
    }


    public function oddNumbers($numbers){
        $totalOdd = 0;
        for($i= 0 ; $i< count($numbers); $i++){
            if($numbers[$i] % 2 != 0){
                $totalOdd++;
            }
        }
        return $totalOdd;
    }






}
