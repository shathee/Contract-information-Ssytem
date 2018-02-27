<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Contract;
use App\Model\Zone;
use App\Model\Circle;
use App\Model\Peoffice;
use Illuminate\Http\Request;

class ContractsController extends Controller
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

        if (!empty($keyword)) {
            $contracts = Contract::where('office_memo', 'LIKE', "%$keyword%")
                ->orWhere('memo_date', 'LIKE', "%$keyword%")
                ->orWhere('peoffice_id', 'LIKE', "%$keyword%")
                ->orWhere('circle_id', 'LIKE', "%$keyword%")
                ->orWhere('zone_id', 'LIKE', "%$keyword%")
                ->orWhere('others', 'LIKE', "%$keyword%")
                ->orWhere('name_of_works', 'LIKE', "%$keyword%")
                ->orWhere('contract_no', 'LIKE', "%$keyword%")
                ->orWhere('egp_id', 'LIKE', "%$keyword%")
                ->orWhere('contractors_legal_title', 'LIKE', "%$keyword%")
                ->orWhere('contractors_contact_details', 'LIKE', "%$keyword%")
                ->orWhere('contractorstrade_license_details', 'LIKE', "%$keyword%")
                ->orWhere('noa_reference', 'LIKE', "%$keyword%")
                ->orWhere('noa_date', 'LIKE', "%$keyword%")
                ->orWhere('original_contract_price', 'LIKE', "%$keyword%")
                ->orWhere('executed_contract_price', 'LIKE', "%$keyword%")
                ->orWhere('contract_date_of_commencement', 'LIKE', "%$keyword%")
                ->orWhere('contract_date_of_completion', 'LIKE', "%$keyword%")
                ->orWhere('actual_date_of_commencement', 'LIKE', "%$keyword%")
                ->orWhere('actual_contract_date_of_completion', 'LIKE', "%$keyword%")
                ->orWhere('days_contract_period_extended', 'LIKE', "%$keyword%")
                ->orWhere('amount_bonus_early_completion', 'LIKE', "%$keyword%")
                ->orWhere('amount_ld_delayed_completion', 'LIKE', "%$keyword%")
                ->orWhere('physical_progress', 'LIKE', "%$keyword%")
                ->orWhere('financial_progress', 'LIKE', "%$keyword%")
                ->orWhere('special_note', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $contracts = Contract::paginate($perPage);
        }
        
        return view('admin.contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffice = Peoffice::all()->pluck('name','id');
        return view('admin.contracts.create', compact('zone','circle','peoffice'));
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
			'name_of_works' => 'required|min:10',
			'noa_reference' => 'required'
		]);
        $requestData = $request->all();
        
        Contract::create($requestData);

        return redirect('admin/contracts')->with('flash_message', 'Contract added!');
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
        $contract = Contract::findOrFail($id);
        $bills = Contract::find($id)->bills;

        $bills->fp = ($bills->sum('gross_payment')/$contract->original_contract_price)*100;
        
        
        return view('admin.contracts.show', compact('contract','bills'));
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
        $contract = Contract::findOrFail($id);
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffice = Peoffice::all()->pluck('name','id');
        
        return view('admin.contracts.edit', compact('contract','zone','circle','peoffice'));

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
			'name_of_works' => 'required|min:10',
			'noa_reference' => 'required'
		]);
        $requestData = $request->all();
        
        $contract = Contract::findOrFail($id);
        $contract->update($requestData);

        return redirect('admin/contracts')->with('flash_message', 'Contract updated!');
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
        Contract::destroy($id);

        return redirect('admin/contracts')->with('flash_message', 'Contract deleted!');
    }
}
