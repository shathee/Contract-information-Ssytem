<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Model\Contract;
use App\Model\Zone;
use App\Model\Circle;
use App\Model\Peoffice;
use App\Model\Bill;
use App\Model\Guser;
use Format;
use PDF;
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
		
		$designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);
       // dd($contract);
    	if(Auth::user()->role =="ADMIN"){
  
    	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
    	}else{
    	$pe = Guser::where('user_id', Auth::user()->id)->first();	
    	}
    	
    	//dd($pe);

    	return view('admin.certificate.payment', compact('contract','pe','designations'));
    }

    public function completionCertificate($id){
    	
    	$contract = Contract::find($id);
    	
    	if(Auth::user()->role =="ADMIN"){
      	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
    	}else{
    	$pe = Guser::where('user_id', Auth::user()->id)->first();	
    	}

    	$contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;

    	return view('admin.certificate.completion', compact('contract','pe'));

    }


    public function finalizeCompletionCertificateForm($id){
        
        $contract = Contract::find($id);
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffice = Peoffice::all()->pluck('name','id');
        
        if(Auth::user()->role =="ADMIN"){
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
        }else{
        $pe = Guser::where('user_id', Auth::user()->id)->first();   
        }

        $contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;
        
        return view('admin.certificate.finalize_completion', compact('contract','pe','zone','circle','peoffice'));

    }

    public function finalizeCompletionCertificateStore($id, Request $request){
        
        $this->validate($request, [
            'name_of_works' => 'required|min:10',
            'noa_reference' => 'required'
        ]);
        $requestData = $request->all();
        
        if(Auth::user()->role =="ADMIN"){
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
        }else{
        $pe = Guser::where('user_id', Auth::user()->id)->first();   
        }

        $designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);

        $peoffice = Peoffice::find( $requestData['peoffice_id'] );

        $requestData['certificate_issued'] ='yes';
        $requestData['issuers_name'] = $pe->name;
        $requestData['issuers_designation'] =$designations[$pe->designation];
        $requestData['certificate_no'] ="4201".str_pad($peoffice->code, 3, '0', STR_PAD_LEFT).'07'.str_pad($id, 4, '0', STR_PAD_LEFT);
        
        $contract = Contract::findOrFail($id);
        $contract->update($requestData);

        return redirect('certificates/completion-certificate/'.$requestData->id)->with('flash_message', 'Information Updated!');
    }

    function makeCompletionCertificatePdf($id){
        $contract = Contract::find($id);
        
        if(Auth::user()->role =="ADMIN"){
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
        }else{
        $pe = Guser::where('user_id', Auth::user()->id)->first();   
        }

        $contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;

        $html = view('admin.certificate.completion', compact('contract','pe'));
                
        PDF::loadHTML($html)->setWarnings(false)->save('public/pdf/'.$contract->id.'.pdf');
    }
    
}
