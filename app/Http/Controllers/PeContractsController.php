<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Contract;
use App\Model\Guser;
use App\Model\Peoffice;
use App\Model\Circle;
use App\Model\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

       // dd($peoffice);
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pecontracts = Contract::paginate($perPage);
        } else {

            $pecontracts = Contract::where('peoffice_id',$peoffice_id)->paginate($perPage);
        }

        return view('front.pecontracts.index', compact('pecontracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $peoffice = Peoffice::where('id',$peoffice_id)->first();;
//dd($peoffice);
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');
        $peoffices = Peoffice::all()->pluck('name','id');
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
        
        Contract::create($requestData);

        return redirect('pecontracts')->with('flash_message', 'Contract added!');
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

        return view('front.pecontracts.edit', compact('pecontract'));
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
        
        $pecontract = Contract::findOrFail($id);
        $pecontract->update($requestData);

        return redirect('pecontracts')->with('flash_message', 'Contract updated!');
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

        return redirect('pecontracts')->with('flash_message', 'Contract deleted!');
    }
}
