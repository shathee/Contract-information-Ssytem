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
		/*
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bills = Bill::where('contract_id', 'LIKE', "%$keyword%")
                ->orWhere('bill_no', 'LIKE', "%$keyword%")
                ->orWhere('bill_date', 'LIKE', "%$keyword%")
                ->orWhere('net_payment', 'LIKE', "%$keyword%")
                ->orWhere('vat', 'LIKE', "%$keyword%")
                ->orWhere('ait', 'LIKE', "%$keyword%")
                ->orWhere('gross_payment', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $bills = Bill::paginate($perPage);
        }
		*/

        return view('search.payment', compact(''));
    }
	
	
  
    public function staff(){

    	return view('pubs.staff');
    }
}
