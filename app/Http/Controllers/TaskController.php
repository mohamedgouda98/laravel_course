<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request){

//        $array = [1,2,3,4,5,6,7,8,9,10];
//
//        if( $request->status == 1 ){
//            $evenCounter = 0;
//            foreach ($array as $item) {
//                if($item %2 == 0){
//                    $evenCounter ++;
//                }
//
//            }
//            return $evenCounter;
//        }
//        $oddCounter = 0;
//        foreach ($array as $item) {
//            if($item %2 != 0){
//                $oddCounter ++;
//            }
//
//        }
//        return $oddCounter;

        $numbers = [1,2,3,4,5,6,7,8,9,10];

        if( $request->status == 1 ) {
            $totalEvenCount = $this->evenNumbers($numbers);
            return "Total even numbers is: ". $totalEvenCount;
        } elseif ( $request->status == 0 ) {
            $totalOddCount = $this->oddNumbers($numbers);
            return "Total even numbers is: ".$totalOddCount;
        }
    }

    public function evenNumbers($numbers){
        $evenCount = 0;
        for ($i=0; $i<count($numbers); $i++) {
            if($numbers[$i] % 2 == 0){
                $evenCount++;
            }
        }
        return $evenCount;
    }

    public function oddNumbers($numbers){
        $oddCount = 0;
        for ($i=0; $i<count($numbers); $i++) {
            if($numbers[$i] % 2 != 0){
                $oddCount++;
            }
        }
        return $oddCount;
    }

    //First Assignment
    public function firsttask(Request $request) {
        $array = [1,2,3,4,5,6,7,8,9,10];
        if( $request->status == 1 ) {
            $totalArray = [];
            for ($i=0; $i<count($array); $i++) {
                if($array[$i] % 2 != 0){
                    $number = $array[$i];
                    $number++;
                }
                $totalArray[] = $number;
            }
            return $totalArray;
        }
    }
}
