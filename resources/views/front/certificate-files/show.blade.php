@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    CertificateFile {{ $certificatefile->id }}
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/certificate-files') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
        <a href="{{ url('/certificate-files/' . $certificatefile->id . '/edit') }}" title="Edit CertificateFile">
            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('certificatefiles' . '/' . $certificatefile->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-xs" title="Delete CertificateFile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </h5>
    
    <div class="table-responsive">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $certificatefile->id }}</td>
                </tr>
                <tr><th> Id </th><td> {{ $certificatefile->id }} </td></tr>
                <tr>
                    <th> Certificate No </th><td> {{ $certificatefile->certificate_no }} </td></tr><tr>
                    <th> Package No:</th>
                    <td> {{ $certificatefile->contract->contract_no }} </td>
                </tr>

                <tr>

                    <td colspan="2"> 
                        
                    </td>
                   
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-10">
        <object data="{{url('/uploads/'.$certificatefile->file_path) }}" type="application/pdf" width="750px" height="750px">
    <embed src="{{url('/uploads/'.$certificatefile->file_path) }}" type="application/pdf">
        <p>This browser does not support PDFs. Please download the PDF to view it: <a href="{{url('/uploads/'.$certificatefile->file_path) }}">Download PDF</a>.</p>
    </embed>
    </object>

    </div>
    
   

  </div>
</div>


    
@endsection
