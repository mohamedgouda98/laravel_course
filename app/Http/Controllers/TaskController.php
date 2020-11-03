<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function evenArray()
    {
    	$array = [1,2,3,4,5,6,7,8,9,10];
    	for ($i = 0; $i < count($array); $i++){
    		if($array[$i] %2 != 0){
    			$array[$i] = $array[$i+1];
    		}
    	}
    	return $array;
    }

    public function newArray()
    {
        $array = [1,2,3,4,5,6,7,8,9,10];
        for ($i = 0; $i < (count($array)-1); $i++){
            if($array[$i] %2 != 0){
                
                $output[] = $array[$i] .'=>'. $array[$i+1];
            }   
        }   
    
        return $output;
    }
}
