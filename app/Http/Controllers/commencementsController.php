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

        if (!empty($keyword)) {
            $commencements = Commencement::where('commencement_memo_no', 'LIKE', "%$keyword%")
                ->orWhere('commencement_memo_date', 'LIKE', "%$keyword%")
                ->orWhere('contract_no', 'LIKE', "%$keyword%")
                ->orWhere('contract_commencement_date', 'LIKE', "%$keyword%")
                ->orWhere('insurance_policy_date', 'LIKE', "%$keyword%")
                ->orWhere('programme_date', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $commencements = Commencement::paginate($perPage);
        }

        return view('front.commencements.index', compact('commencements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $peoffice_id = Guser::where('user_id', Auth::id())->pluck('peoffice_id');
        $contracts = Contract::where('peoffice_id',$peoffice_id)->pluck('contract_no','id');

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
        
        Commencement::create($requestData);

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

        return view('front.commencements.show', compact('commencement'));
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

        return view('front.commencements.edit', compact('commencement'));
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
        Commencement::destroy($id);

        return redirect('commencements')->with('flash_message', 'Commencement deleted!');
    }
}
