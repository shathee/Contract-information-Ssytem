<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Commencement;
use App\Model\Contract;
use App\Model\Guser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Peoffice;
use App\Model\Circle;
use App\Model\Zone;
use App\Model\User;

class CommencementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        // $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        // $peoffice = Peoffice::where('id', $peoffice_id)->get();

        $pecontracts = Contract::where('user_id', Auth::id())->pluck('id');
       
        
      

        if (!empty($keyword)) {
            $commencements = Commencement::where('commencement_memo_no', 'LIKE', "%$keyword%")
                ->orWhere('commencement_memo_date', 'LIKE', "%$keyword%")
                ->orWhere('contract_no', 'LIKE', "%$keyword%")
                ->orWhere('contract_commencement_date', 'LIKE', "%$keyword%")
                ->orWhere('insurance_policy_date', 'LIKE', "%$keyword%")
                ->orWhere('programme_date', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {

            if ($pecontracts->count() > 0) {
				
                $commencements = Commencement::whereIn('contract_id',$pecontracts)->get();
				//dd($commencements);
            }else{
                $commencements = [];
            }
           
            

        }

        
        //$comm = Commencement::where('contract_id',$pecontracts)->get();
        
        //dd($commencements);

        return view('front.commencements.index', compact('commencements','pecontracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        // $contracts = Contract::where('peoffice_id',$peoffice_id)->where('commencement_id', NULL)->where('contract_type','works')->pluck('contract_no','id');
        $contracts = Contract::where('user_id',Auth::id())->where('commencement_id', NULL)->where('contract_type','works')->pluck('contract_no','id');

        return view('front.commencements.create', compact('contracts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        $commencement = Commencement::create($requestData);

        Contract::where('id', $commencement->contract_id)
          ->update(['commencement_id' => $commencement->id,'contract_date_of_commencement'=> $commencement->contract_commencement_date]);

        return redirect('commencements')->with('flash_message', 'Commencement added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        

        $commencement = Commencement::findOrFail($id);
        $contract = Contract::where('commencement_id', $id)->first();

        
        return view('front.commencements.show', compact('commencement','contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $commencement = Commencement::findOrFail($id);

        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $contracts = Contract::where('peoffice_id',$peoffice_id)->where('commencement_id', NULL)->pluck('contract_no','id');

        return view('front.commencements.edit', compact('commencement','contracts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $commencement = Commencement::findOrFail($id);
        $commencement->update($requestData);

        return redirect('commencements')->with('flash_message', 'Commencement updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        
        $commencement = Commencement::find($id);

        Contract::where('id', $commencement->contract_id)
          ->update(['commencement_id' => NULL,'contract_date_of_commencement'=>NULL]);
        
        Commencement::destroy($id);

        return redirect('commencements')->with('flash_message', 'Commencement deleted!');
    }
}
