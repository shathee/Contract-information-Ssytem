<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Model\Contract;
use App\Model\Guser;
use App\Model\Peoffice;
use App\Model\Circle;
use App\Model\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PeContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        
        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $peoffice = Peoffice::where('id', $peoffice_id)->get();

       
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pecontracts = Contract::paginate($perPage);
        } else {

            $pecontracts = Contract::where('peoffice_id',$peoffice_id)->paginate($perPage);
        }

//dd($pecontracts);

        return view('front.pecontracts.index', compact('pecontracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $peoffice_id = Guser::where('user_id', Auth::id())->first();
        $peoffice = Peoffice::where('id',$peoffice_id->peoffice_id)->first();
        
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffices = Peoffice::all()->pluck('name','id');
        //tdd($peoffice);
        return view('front.pecontracts.create', compact('zone','circle','peoffices','peoffice')); 
        
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
        $requestData['user_id'] = Auth::id();
        if($requestData['contract_type']!='works'){
            $requestData['commencement_id'] = "na";
        }else{
            $requestData['commencement_id'] = NULL;
        }
       //dd($requestData);
        Contract::create($requestData);

        return redirect('/contracts')->with('flash_message', 'Contract added!');
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
        $pecontract = Contract::findOrFail($id);
        
        // if($pecontract->contract_date_of_commencement !=null){
        //     $contract_date_of_commencement = $pecontract->contract_date_of_commencement;
        //     $pecontract->contract_date_of_completion = $contract_date_of_commencement->addDays($pecontract->original_contract_completion_time);
            
        //     $actual_date_of_commencement = $pecontract->actual_date_of_commencement;
        //     $pecontract->actual_contract_date_of_completion = $actual_date_of_commencement->addDays($pecontract->original_contract_completion_time);
        // }
        //dd($pecontract);
        abort_if($pecontract->user_id != Auth::id(), 403);
        
        return view('front.pecontracts.show', compact('pecontract'));
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
        $pecontract = Contract::findOrFail($id);
        abort_if($pecontract->user_id != Auth::id(), 403);

        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $peoffice = Peoffice::where('id',$peoffice_id)->first();;

        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffices = Peoffice::all()->pluck('name','id');
        
        return view('front.pecontracts.edit', compact('pecontract','zone','circle','peoffices','peoffice'));
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
        //dd($requestData, $id);
        $pecontract = Contract::findOrFail($id);
        abort_if($pecontract->user_id != Auth::id(), 403);
        $pecontract->update($requestData);

        return redirect('contracts')->with('flash_message', 'Contract updated!');
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
        $pecontract = Contract::findOrFail($id);
        abort_if($pecontract->user_id != Auth::id(), 403);
        Contract::destroy($id);

        return redirect('contracts')->with('flash_message', 'Contract deleted!');
    }
}
