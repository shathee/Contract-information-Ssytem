<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Guser;
use App\Model\Peoffice;
use App\User;
use Illuminate\Http\Request;

class GusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $path = storage_path() . "\json\designation.json";
        $designation = json_decode(file_get_contents($path), true);

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $gusers = Guser::where('name', 'LIKE', "%$keyword%")
                ->orWhere('office', 'LIKE', "%$keyword%")
                ->orWhere('designation', 'LIKE', "%$keyword%")
                ->orWhere('mobile', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $gusers = Guser::paginate($perPage);
        }

        return view('admin.gusers.index', compact('gusers','designation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $peoffices = Peoffice::all()->pluck('name','id');
      
        $path = storage_path() . "\json\designation.json";
        $designation = json_decode(file_get_contents($path), true); 
        
        return view('admin.gusers.create', compact('designation','peoffices'));
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
        
        Guser::create($requestData);

        return redirect('admin/gusers')->with('flash_message', 'Guser added!');
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
        $guser = Guser::findOrFail($id);
        
        $path = storage_path() . "\json\designation.json";
        $designation = json_decode(file_get_contents($path), true);

        return view('admin.gusers.show', compact('guser','designation'));
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
        $guser = Guser::findOrFail($id);

        $peoffices = Peoffice::all()->pluck('name','id');
        $path = storage_path() . "\json\designation.json";
        $designation = json_decode(file_get_contents($path), true); 

        return view('admin.gusers.edit', compact('guser','designation','peoffices'));
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
        
        $guser = Guser::findOrFail($id);
        $guser->update($requestData);

        return redirect('admin/gusers')->with('flash_message', 'Guser updated!');
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
        Guser::destroy($id);

        return redirect('admin/gusers')->with('flash_message', 'Guser deleted!');
    }
}
