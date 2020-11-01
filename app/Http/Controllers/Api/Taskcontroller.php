<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function task(Request $request)
    {
    	$array = [1,2,3,4,5,6,7,8,9,10];

    	if( $request->status == 1 ){
    		$evenCounter = 0;
    		foreach ($array as $item) {
    			if($item %2 == 0){
    				$evenCounter ++;
    			}
    			
    		}
    		return $evenCounter;
    	}
    	$oddCounter = 0;
    	foreach ($array as $item) {
    		if($item %2 != 0){
    				$oddCounter ++;
    		}
    			
    	}
    	return $oddCounter;
    }
}
