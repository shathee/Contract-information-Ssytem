<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Contract;

use Illuminate\Http\Request;

class commencementsController extends Controller
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
            $commencements = commencement::where('commencement_memo_no', 'LIKE', "%$keyword%")
                ->orWhere('commencement_memo_date', 'LIKE', "%$keyword%")
                ->orWhere('contractors_legal_title', 'LIKE', "%$keyword%")
                ->orWhere('contract_no', 'LIKE', "%$keyword%")
                ->orWhere('contract_date_of_commencement', 'LIKE', "%$keyword%")
                ->orWhere('contract_date_of_commencement_insurance', 'LIKE', "%$keyword%")
                ->orWhere('concontract_date_of_commencement_programme', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $commencements = Contract::paginate($perPage);
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
        return view('front.commencements.create');
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

        return redirect('commencements')->with('flash_message', 'commencement added!');
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
        $commencement = Contract::findOrFail($id);

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
        $commencement = Contract::findOrFail($id);

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
        
        $commencement = Contract::findOrFail($id);
        $commencement->update($requestData);

        return redirect('commencements')->with('flash_message', 'commencement updated!');
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

        return redirect('commencements')->with('flash_message', 'commencement deleted!');
    }
}
