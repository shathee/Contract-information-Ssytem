<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Model\Contract;
use App\Model\Zone;
use App\Model\Circle;
use App\Model\Peoffice;
use App\Model\Bill;
use App\Model\Guser;
use Illuminate\Support\Facades\Auth;

class certificateController extends Controller
{
    public function paymentCertiface($id){
    	
    	$contract = Contract::find($id);
    	$pe = Guser::find(Auth::user()->id);
    	

    	return view('admin.certificate.index', compact('contract','pe'));
    }

    public function completionCertiface($id){

    }
}
