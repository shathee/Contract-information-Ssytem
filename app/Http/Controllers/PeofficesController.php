<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Peoffice;
use App\Model\District;
use App\Model\Zone;
use App\Model\Circle;
use Illuminate\Http\Request;

class PeofficesController extends Controller
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
            $peoffices = Peoffice::where('zone_id', 'LIKE', "%$keyword%")
                ->orWhere('circle_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('district', 'LIKE', "%$keyword%")
                ->orWhere('postcode', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('code', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $peoffices = Peoffice::paginate($perPage);
        }

        return view('admin.peoffices.index', compact('peoffices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   
        $district = District::all()->pluck('name','id');
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');

        return view('admin.peoffices.create', compact('district','zone','circle'));
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
        
        Peoffice::create($requestData);

        return redirect('admin/peoffices')->with('flash_message', 'Peoffice added!');
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
        $peoffice = Peoffice::findOrFail($id);

        return view('admin.peoffices.show', compact('peoffice'));
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
        $peoffice = Peoffice::findOrFail($id);

        $district = District::all()->pluck('name','id');
        $zone = Zone::all()->pluck('name','id');
        $circle = Circle::all()->pluck('name','id');

        return view('admin.peoffices.edit', compact('peoffice','district','zone','circle'));
        
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
        
        $peoffice = Peoffice::findOrFail($id);
        $peoffice->update($requestData);

        return redirect('admin/peoffices')->with('flash_message', 'Peoffice updated!');
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
        Peoffice::destroy($id);

        return redirect('admin/peoffices')->with('flash_message', 'Peoffice deleted!');
    }
}
