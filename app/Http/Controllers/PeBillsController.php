<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB; 
use App\Model\Bill;
use App\Model\Contract;
use App\Model\Guser;
use App\Model\Peoffice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PeBillsController extends Controller
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

        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $peoffice = Peoffice::where('id', $peoffice_id)->get();
        $pecontracts = Contract::where('peoffice_id',$peoffice_id)->pluck('id');
        
        if (!empty($keyword)) {
            $bills = Bill::paginate($perPage);
        } else {
          $bills = Bill::where('contract_id', $pecontracts)->paginate($perPage);
            
        }

        return view('front.bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        //$peoffice = Peoffice::where('id', $peoffice_id)->get();
        //$pecontracts = Contract::where('peoffice_id',$peoffice_id)->pluck('id');

        $contracts = Contract::where('commencement_id', '!=', NULL)
            ->where('peoffice_id', '=', $peoffice_id)->pluck('contract_no','id');
        return view('front.bills.create',compact('contracts'));
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
        
        $this->validate($request, [
            'bill_no' => 'required',
            'bill_date' => 'required',
            'net_payment' => 'required',
            'vat' => 'required',
            'ait' => 'required',
            'gross_payment' => 'required'
        ]);
        $requestData = $request->all();
        
        Bill::create($requestData);

        return redirect('bills')->with('flash_message', 'Bill added!');
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
        $bill = Bill::findOrFail($id);
        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');

        $pe = Peoffice::findOrFail($peoffice_id[0]);
        //d/d($pe);
        return view('front.bills.show', compact('bill','pe'));
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
        
        $bill = Bill::findOrFail($id);
        $contracts = Contract::where('commencement_id', '!=', NULL)->pluck('contract_no','id');

        return view('front.bills.edit', compact('bill','contracts'));

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
        
        $this->validate($request, [
            'bill_no' => 'required',
            'bill_date' => 'required',
            'net_payment' => 'required',
            'vat' => 'required',
            'ait' => 'required',
            'gross_payment' => 'required'
        ]);
        $requestData = $request->all();
        
        $bill = Bill::findOrFail($id);
        $bill->update($requestData);

        return redirect('bills')->with('flash_message', 'Bill updated!');

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
        Bill::destroy($id);

        return redirect('bills')->with('flash_message', 'Bill deleted!');
    }
}
