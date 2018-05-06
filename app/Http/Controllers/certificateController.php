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

    	if(Auth::user()->role =="ADMIN"){
  
    	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
    	}else{
    	$pe = Guser::where('user_id', Auth::user()->id)->first();	
    	}
    	
    	//d/d($pe);

    	return view('admin.certificate.payment', compact('contract','pe'));
    }

    public function completionCertiface($id){
    	
    	$contract = Contract::find($id);
    	
    	if(Auth::user()->role =="ADMIN"){
      	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
    	}else{
    	$pe = Guser::where('user_id', Auth::user()->id)->first();	
    	}

    	//dd($contract->bills->sum('gross_payment'));
    	$contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;

    	return view('admin.certificate.completion', compact('contract','pe'));

    }
}
