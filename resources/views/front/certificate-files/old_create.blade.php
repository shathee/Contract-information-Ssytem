@extends('layouts.app')

@section('content')
    
<div class="card">
  <div class="card-header">
    Upload Old Certificate
  </div>  
  <div class="card-body">
    <h5 class="card-title text-right">
        <a href="{{ url('/old-certificate-files') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    </h5>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ url('/old-certificate-files') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    
        </div>
        <div class="form-group {{ $errors->has('certificate_no') ? 'has-error' : ''}}">
            <label for="certificate_no" class="col-md-4 control-label">{{ 'Memo No' }}</label>
            <div class="col-md-6">
                <input class="form-control" name="certificate_no" type="text" id="certificate_no" value="{{ $certificatefile->certificate_no or ''}}" >
                {!! $errors->first('certificate_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

            <div class="form-group {{ $errors->has('contract_no') ? 'has-error' : ''}}">
            <label for="contract_no" class="col-md-4 control-label">{{ 'Packege/Contract No' }}</label>
            <div class="col-md-6">
                <input class="form-control" name="contract_no" type="text" id="contract_no" value="{{ $certificatefile->contract_no or ''}}" >
                {!! $errors->first('contract_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
            <div class="form-group {{ $errors->has('file_path') ? 'has-error' : ''}}">
            <label for="file_path" class="col-md-4 control-label">{{ 'File Path' }}</label>
            <div class="col-md-6">
                <input class="form-control" name="file_path" type="file" id="file_path" value="{{ $certificatefile->file_path or ''}}" >
                {!! $errors->first('file_path', '<p class="help-block">:message</p>') !!}
            </div>
        </div><div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
            <label for="type" class="col-md-4 control-label">{{ 'Type' }}</label>
            <div class="col-md-6">
                <select name="type" class="form-control" id="type" >
                   <option value="completion" {{ (isset($certificatefile->type) && $certificatefile->type == "completion") ? 'selected' : ''}}>Completion Certificate</option>
                   <option value="payment" {{ (isset($certificatefile->type) && $certificatefile->type == "completion") ? 'selected' : ''}}>Payment Certificate</option>
                </select>
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
            </div>
        </div>


    </form>

   

    

  </div>
</div>
            
   
@endsection
