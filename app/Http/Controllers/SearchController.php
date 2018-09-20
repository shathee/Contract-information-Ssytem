<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Commencement;
use App\Model\Contract;
use App\Model\Guser;
use App\Model\Peoffice;
use App\Model\Circle;
use App\Model\Zone;

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
            $contract = Contract::where('certificate_no', '=', $keyword)
                ->Where('certificate_issued', '=', "yes")->get();
            //dd($contract);
            return view('search.payment', compact('contract'));
        } else {
            return view('search.payment');
        }
        

        return view('search.payment', compact('contract','pe','designations'));

        $contract = Contract::find($id);
        
        $designation_path = storage_path() . "/json/designation.json";
        $designations = json_decode(file_get_contents($designation_path), true);
       // dd($contract);
        if(Auth::user()->role =="ADMIN"){
  
        $pe = Guser::where('peoffice_id',$contract->peoffice->id)->first();
        }else{
        $pe = Guser::where('user_id', Auth::user()->id)->first();   
        }




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
}
