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
use App\Model\CertificateFile;

class SearchController extends Controller
{
    public function index(){
        
    	return view('search.index');
    }
 
	
	public function search_completion(Request $request)
    {
		
        $keyword = $request->get('search');
        
		
        if (!empty($keyword)) {

           if($request->get('old') == "yes"){
            
             $certificateFile = CertificateFile::where('certificate_no', 'like','%' . $keyword . '%' )->get();
             return view('search.completion', compact('certificateFile'));
           }else{
            
             $contract = Contract::where('certificate_no', '=', $keyword)
                ->Where('certificate_issued', '=', "yes")->get();
                return view('search.completion', compact('contract'));
           }
           
			//dd($contract);
			
        } else {
            return view('search.completion');
        }
		

        
    }
	
	public function search_completion_show($id)
    {
		
        $contract = Contract::find($id);
		
    	//$pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
		//dd($pe);
    	//$contract->fp = ($contract->bills->sum('gross_payment')/$contract->original_contract_price)*100;
        
        $certificatefile = CertificateFile::where('certificate_no',$contract->certificate_no)->first();
         //dd($certificatefile);
        
    	return view('search.completion_show', compact('contract','pe','certificatefile'));
		

        
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
        $payment_certificate_bill_ids = Bill::select('id')->where('contract_id',$payment_certificate_contract_id)->get();

        $payment_certificate_issuer = PaymentCertificates::where('certificate_no',$id)->first();

        $contract = Contract::where('id', $payment_certificate_contract_id->contract_id)->with('Peoffice')->first();
        $bills = Bill::whereIn('id', $payment_certificate_bill_ids)->get();
        
       //dd($bills);
        $payment_certificate_no = $id;
        $designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();

        $payment_certificate = PaymentCertificates::where('certificate_no',$id)->first();
        
        $bills = $payment_certificate->payment_certificate;

        return view('search.payment_show', compact('bills','contract','pe','designations','payment_certificate_contract_id','payment_certificate_no','payment_certificate_issuer'));
        

        
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
	
	
  
    
}
