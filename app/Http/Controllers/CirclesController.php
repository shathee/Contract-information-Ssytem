<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Circle;
use App\Model\Zone;
use App\Model\District;
use Illuminate\Http\Request;

class CirclesController extends Controller
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
            $circles = Circle::where('zone_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('district', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('code', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $circles = Circle::paginate($perPage);
        }

        return view('admin.circles.index', compact('circles'));
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

        return view('admin.circles.create',compact('district','zone'));
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
        
        Circle::create($requestData);

        return redirect('admin/circles')->with('flash_message', 'Circle added!');
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
        $circle = Circle::findOrFail($id);

        return view('admin.circles.show', compact('circle'));
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
        $circle = Circle::findOrFail($id);
        $district = District::all()->pluck('name','id');
        $zone = Zone::all()->pluck('name','id');

        return view('admin.circles.edit', compact('circle','district','zone'));
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
        
        $circle = Circle::findOrFail($id);
        $circle->update($requestData);

        return redirect('admin/circles')->with('flash_message', 'Circle updated!');
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
        Circle::destroy($id);

        return redirect('admin/circles')->with('flash_message', 'Circle deleted!');
    }
}
