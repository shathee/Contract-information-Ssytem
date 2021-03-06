<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\CertificateFile;
use App\Model\Contract;
use Illuminate\Http\Request;
use Storage;

class CertificateFilesController extends Controller
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
            $certificatefiles = CertificateFile::where('id', 'LIKE', "%$keyword%")
                ->orWhere('certificate_no', 'LIKE', "%$keyword%")
                ->orWhere('file_path', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $certificatefiles = CertificateFile::paginate($perPage);
            //$certificatefiles = CertificateFile::all();

            //dd($certificatefiles);
        }

        return view('front.certificate-files.index', compact('certificatefiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('front.certificate-files.create');
    }
    public function createOld()
    {
        return view('front.certificate-files.old_create');
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
        //dd($request->all());
        $this->validate($request, [
            'certificate_no' => 'required|unique:certificate_files,certificate_no',
            'file_path' => 'required|mimes:pdf|max:1000',
            'type' => 'required'
            
        ]);

        $requestData = $request->all();
                if ($request->hasFile('file_path')) {
            $requestData['file_path'] = $request->file('file_path')
                ->store('certificates','public_uploads');
        }

        CertificateFile::create($requestData);

        $NewCertificateFile = CertificateFile::where('certificate_no', $requestData['certificate_no'])->first();

        $update['certificate_file_id'] = $NewCertificateFile->id;

        Contract::where('certificate_no', $requestData['certificate_no'])
            ->update($update);

        return redirect('certificate-files')->with('flash_message', 'Certificate File uploaded!');
    }

    public function storeOld(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'certificate_no' => 'required|unique:certificate_files,certificate_no',
            'contract_no' => 'required',
            'file_path' => 'required|mimes:pdf|max:1000',
            'type' => 'required'
            
        ]);

        $requestData = $request->all();
                if ($request->hasFile('file_path')) {
            $requestData['file_path'] = $request->file('file_path')
                ->store('certificates','public_uploads');
        }

        CertificateFile::create($requestData);

        return redirect('old-certificate-files')->with('flash_message', 'Certificate File uploaded!');
    }

    public function showAllOld(Request $request)
    {
        

        //CertificateFile::where

        return redirect('old-certificate-files')->with('flash_message', 'CertificateFile added!');
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
        $certificatefile = CertificateFile::findOrFail($id);
         
        return view('front.certificate-files.show', compact('certificatefile'));
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
        $certificatefile = CertificateFile::findOrFail($id);

        return view('front.certificate-files.edit', compact('certificatefile'));
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
                if ($request->hasFile('file_path')) {
            $requestData['file_path'] = $request->file('file_path')
                ->store('uploads', 'public');
        }

        $certificatefile = CertificateFile::findOrFail($id);
        $certificatefile->update($requestData);

        return redirect('certificate-files')->with('flash_message', 'CertificateFile updated!');
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
        CertificateFile::destroy($id);

        return redirect('certificate-files')->with('flash_message', 'CertificateFile deleted!');
    }
}
