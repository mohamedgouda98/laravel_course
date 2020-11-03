<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstTaskController extends Controller
{

    public function evenTask(){

        /**
         * given array
         * check if index of array even or odd
         * convert even numbers to odd
         * print[
         *  2 --> 3
         * ]
         */

        $numbers = [1,2,3,4,5,6,7,8,9,10];

        $evenNumbers = [];

        for($i=0 ; $i<count($numbers); $i++){

            if($numbers[$i] %2 == 0){
                $evenNumbers[$numbers[$i]] = $numbers[$i] + 1;
            }else{
                $evenNumbers[$numbers[$i]] = $numbers[$i];
            }

        }

        $numbersArray = $this->reDesignResponse($evenNumbers);

       return view('Tasks.evenTask', compact( 'numbersArray'));
    }


    public function evenTaskApi(){

        /**
         * given array
         * check if index of array even or odd
         * convert even numbers to odd
         * print[
         *  2 --> 3
         * ]
         */

        $numbers = [1,2,3,4,5,6,7,8,9,10];

        $evenNumbers = [];

        for($i=0 ; $i<count($numbers); $i++){

            if($numbers[$i] %2 == 0){
                $evenNumbers[$numbers[$i]] = $numbers[$i] + 1;
            }else{
                $evenNumbers[$numbers[$i]] = $numbers[$i];
            }

        }

       return $this->reDesignResponse($evenNumbers);

    }

    public function reDesignResponse($array){

        foreach ($array as $key => $value){
            if($key % 2 != 0){
                unset($array[$key]);
            }
        }

        return $array;
    }

}
