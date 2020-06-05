<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CheckOutController extends Controller
{
    public function checkOut(){
    	$customerId=Session::get('customerId');
    	if($customerId!=null){
    		return redirect()->route('billing.create');
    	}
    	else{
    		return redirect('user-register');
    	}
    }
}
