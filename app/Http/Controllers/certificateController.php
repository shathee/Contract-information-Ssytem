<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Model\Contract;
use App\Model\Zone;
use App\Model\Circle;
use App\Model\Peoffice;
use App\Model\Bill;
use App\Model\Guser;
use App\Model\PaymentCertificates;
use Format;
use PDF;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

    public function paymentCertificates($id){
        
        $contract = PaymentCertificates::where('contract_id', $id)->groupBy('certificate_no')->get();
        
          
        return view('admin.certificate.payments', compact('contract','pe','designations'));
    }



    public function storePaymentCertificates($id, Request $request){
        
        $requestData = $request->all();
        
        $certificate_no = '420107'.Carbon::now()->timestamp; 
        foreach($requestData['bill_id'] as $key=>$value){
            $create['contract_id'] = $requestData['contract_id'];
            $create['bill_id'] = $requestData['bill_id'][$key];
            $create['certificate_no'] = $certificate_no;
            $create['issuer_name'] = $requestData['issuer_name'];
           
            PaymentCertificates::create($create);
        }
         //dd($create);
       

        return redirect('certificates/payment-certificate')->with('flash_message', 'Payment Certificate Generated!');
    }

     public function showPaymentCertificate($id){
        
        
        $payment_certificate_contract_id = PaymentCertificates::select('contract_id')->where('certificate_no',$id)->first();
        $payment_certificate_issuer = PaymentCertificates::where('certificate_no',$id)->first();
        $payment_certificate_bill_ids = PaymentCertificates::select('bill_id')->where('certificate_no',$id)->get();


        $contract = Contract::where('id', $payment_certificate_contract_id->contract_id)->with('Peoffice')->first();
        $bills = Bill::whereIn('id', $payment_certificate_bill_ids)->get();
        
       //dd($bills);
        $payment_certificate_no = $id;
        
        $designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
        //dd($pe);

        return view('admin.certificate.payment_view', compact('bills','contract','pe','designations','payment_certificate_contract_id','payment_certificate_no','payment_certificate_issuer'));
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
        $requestData['certificate_no'] ="420107".str_pad($peoffice->code, 3, '0', STR_PAD_LEFT).str_pad($id, 4, '0', STR_PAD_LEFT);
        //$requestData['membership_no'] = "GM" . date("Ymd") . sprintf('%06d', $id);
        //dd($requestData['certificate_no']);
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
