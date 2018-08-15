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
    
    public function index($type){
        
        $pe = Guser::where('user_id', Auth::user()->id)->first();
        $o['type'] = $type;
        if($type='payment-certificate'){
            $contracts = Contract::where('peoffice_id',$pe->peoffice->id)->paginate(10);
        }elseif($type = 'completion-certificate'){
            $contracts = Contract::where('peoffice_id',$pe->peoffice->id)->paginate(10);
        }else{
            echo "Please Select a Certificate Type";
        }
        //dd($o);
        return view('admin.certificate.index', compact('contracts','pe','o'));
    }

    public function paymentCertificate($id){
    	
    	$contract = Contract::find($id);

       // dd($contract);
    	if(Auth::user()->role =="ADMIN"){
  
    	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
    	}else{
    	$pe = Guser::where('user_id', Auth::user()->id)->first();	
    	}
    	
    	//dd($pe);

    	return view('admin.certificate.payment', compact('contract','pe'));
    }

    public function completionCertificate($id){
    	
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
