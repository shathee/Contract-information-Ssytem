<div class="form-group {{ $errors->has('commencement_memo_no') ? 'has-error' : ''}}">
    <label for="commencement_memo_no" class="col-md-4 control-label">{{ 'Commencement Memo No' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="commencement_memo_no" type="text" id="commencement_memo_no" value="{{ $commencement->commencement_memo_no or ''}}" >
        {!! $errors->first('commencement_memo_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('commencement_memo_date') ? 'has-error' : ''}}">
    <label for="commencement_memo_date" class="col-md-4 control-label">{{ 'Commencement Memo Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="commencement_memo_date" type="date" id="commencement_memo_date" value="{{ $commencement->commencement_memo_date or ''}}" >
        {!! $errors->first('commencement_memo_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contractors_legal_title') ? 'has-error' : ''}}">
    <label for="contractors_legal_title" class="col-md-4 control-label">{{ 'Contractors Legal Title' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="contractors_legal_title" type="textarea" id="contractors_legal_title" >{{ $commencement->contractors_legal_title or ''}}</textarea>
        {!! $errors->first('contractors_legal_title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contract_no') ? 'has-error' : ''}}">
    <label for="contract_no" class="col-md-4 control-label">{{ 'Contract No' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="contract_no" type="textarea" id="contract_no" >{{ $commencement->contract_no or ''}}</textarea>
        {!! $errors->first('contract_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contract_date_of_commencement') ? 'has-error' : ''}}">
    <label for="contract_date_of_commencement" class="col-md-4 control-label">{{ 'Contract Date Of Commencement' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contract_date_of_commencement" type="date" id="contract_date_of_commencement" value="{{ $commencement->contract_date_of_commencement or ''}}" >
        {!! $errors->first('contract_date_of_commencement', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contract_date_of_commencement_insurance') ? 'has-error' : ''}}">
    <label for="contract_date_of_commencement_insurance" class="col-md-4 control-label">{{ 'Contract Date Of Commencement Insurance' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contract_date_of_commencement_insurance" type="date" id="contract_date_of_commencement_insurance" value="{{ $commencement->contract_date_of_commencement_insurance or ''}}" >
        {!! $errors->first('contract_date_of_commencement_insurance', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('concontract_date_of_commencement_programme') ? 'has-error' : ''}}">
    <label for="concontract_date_of_commencement_programme" class="col-md-4 control-label">{{ 'Concontract Date Of Commencement Programme' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="concontract_date_of_commencement_programme" type="date" id="concontract_date_of_commencement_programme" value="{{ $commencement->concontract_date_of_commencement_programme or ''}}" >
        {!! $errors->first('concontract_date_of_commencement_programme', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
