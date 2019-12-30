<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Bill;
use App\Model\Contract;
use Illuminate\Http\Request;

class BillsController extends Controller
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

        return view('admin.bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $contracts = Contract::all()->pluck('contract_no','id');
        return view('admin.bills.create',compact('contracts'));
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

        return redirect('admin/bills')->with('flash_message', 'Bill added!');
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

        return view('admin.bills.show', compact('bill'));
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
        $contracts = Contract::all()->pluck('contract_no','id');

        return view('admin.bills.edit', compact('bill','contracts'));
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

        return redirect('admin/bills')->with('flash_message', 'Bill updated!');
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

        return redirect('admin/bills')->with('flash_message', 'Bill deleted!');
    }
}
