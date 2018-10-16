<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Commencement;
use App\Model\Contract;
use App\Model\Guser;
use App\Model\Peoffice;
use App\Model\Circle;
use App\Model\Zone;
use App\Model\PaymentCertificates;
use App\Model\Bill;

class SearchController extends Controller
{
    public function index(){

    	return view('search.index');
    }
 
	
	public function search_completion(Request $request)
    {
		
        $keyword = $request->get('search');
        
		
        if (!empty($keyword)) {
            $contract = Contract::where('certificate_no', '=', $keyword)
                ->Where('certificate_issued', '=', "yes")->get();
			//dd($contract);
			return view('search.completion', compact('contract'));
        } else {
            return view('search.completion');
        }
		

        
    }
	
	public function search_completion_show($id)
    {
		
        $contract = Contract::find($id);
		
    	$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
		//dd($pe);
    	$contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;

    	return view('search.completion_show', compact('contract','pe'));
		

        
    }
	
	public function search_payment(Request $request)
    {	
		$keyword = $request->get('search');
        
        
        if (!empty($keyword)) {
            
            $contract = PaymentCertificates::where('certificate_no', '=', $keyword)->first();

            //return view('search.payment', compact('contract'));
            if($contract){
                return redirect('search/pc/'.$contract->certificate_no);
            }else{
                return view('search.payment');
            }
            
        } else {
            return view('search.payment');
        }
        
        

    }

    public function search_payment_show($id)
    {
        
        $payment_certificate_contract_id = PaymentCertificates::select('contract_id')->where('certificate_no',$id)->first();
        $payment_certificate_bill_ids = PaymentCertificates::select('bill_id')->where('certificate_no',$id)->get();

        //dd($payment_certificate_contract_id);
        $contract = Contract::where('id', $payment_certificate_contract_id->contract_id)->with('Peoffice')->first();
        $bills = Bill::whereIn('id', $payment_certificate_bill_ids)->get();
        
       //dd($bills);
        $payment_certificate_no = $id;
        $designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();

        return view('search.payment_show', compact('bills','contract','pe','designations','payment_certificate_contract_id','payment_certificate_no'));
        

        
    }
    

    public function search_work_in_hand(Request $request)
    {   
        $keyword = $request->get('search');
        $perpage = 25;
        
        if (!empty($keyword)) {
            
            $contract = Contract::where('contractors_legal_title', 'LIKE', "%$keyword%")->paginate($perpage);
          
          
           
        } else {
            $contract = [];
        }
        
        
        return view('search.work_in_hand', compact('contract'));

    }
	
	
  
    public function staff(){

    	return view('pubs.staff');
    }

  
    public function contact(){

        return view('pubs.contact');
    }
}
