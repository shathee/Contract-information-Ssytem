<div class="form-group {{ $errors->has('contract_type') ? 'has-error' : ''}}">
        <label for="contract_type" class="col-md-4 control-label">{{ 'Procurement Type'.$pecontract->contract_type }}</label>
        <div class="col-md-6">
            <select name="contract_type" class="form-control" id="contract_type" required>
                <option value="works" {{ (isset($pecontract->contract_type) && $pecontract->contract_type == 'works') ? 'selected' : ''}}>Works</option>
                <option value="goods" {{ (isset($pecontract->contract_type) && $pecontract->contract_type == 'goods') ? 'selected' : ''}}>Goods/Supply</option>
                <option value="services" {{ (isset($pecontract->contract_type) && $pecontract->contract_type == 'services') ? 'selected' : ''}}>Services</option>
                <option value="physical_services" {{ (isset($pecontract->contract_type) && $pecontract->contract_type == 'physical_services') ? 'selected' : ''}}>Physical Services</option>
            </select>
            <!--<input class="form-control" name="contract_no" type="text" id="contract_no" value="{{ $commencement->contract_no or ''}}" >-->
            {!! $errors->first('contract_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group {{ $errors->has('peoffice_id') ? 'has-error' : ''}}">
    <label for="peoffice_id" class="col-md-4 control-label">{{ 'Procuring Entity/Division' }}</label>
    <div class="col-md-6">
    <label class="form-control">{{ $peoffice->name or ''}}</label>
    <input class="form-control" name="peoffice_id" type="hidden" id="peoffice_id" readonly="readonly" value="{{ $peoffice->id or ''}}" >
    {!! $errors->first('peoffice_id', '<p class="help-block">:message</p>') !!}

        
    </div>
</div>
<div class="form-group {{ $errors->has('circle_id') ? 'has-error' : ''}}">
    <label for="circle_id" class="col-md-4 control-label">{{ 'Circle Id' }}</label>
    <div class="col-md-6">
        <label class="form-control">{{ $peoffice->circle->name or ''}}</label>
        <input class="form-control" name="circle_id" type="hidden" id="peoffice_id" readonly="readonly" value="{{ $peoffice->circle_id or ''}}" >
        {!! $errors->first('circle_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('zone_id') ? 'has-error' : ''}}">
    <label for="zone_id" class="col-md-4 control-label">{{ 'Zone Id' }}</label>
    <div class="col-md-6">
        <label class="form-control">{{ $peoffice->zone->name or ''}}</label>
        <input class="form-control" name="zone_id" type="hidden" id="peoffice_id" readonly="readonly" value="{{ $peoffice->zone_id or ''}}" >
        {!! $errors->first('zone_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contract_no') ? 'has-error' : ''}}">
    <label for="contract_no" class="col-md-4 control-label">{{ 'Contract Package No' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contract_no" type="text" id="contract_no" value="{{ $pecontract->contract_no or ''}}" required >
        {!! $errors->first('contract_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('egp_id') ? 'has-error' : ''}}">
    <label for="egp_id" class="col-md-4 control-label">{{ 'Egp Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="egp_id" type="text" id="egp_id" value="{{ $pecontract->egp_id or ''}}" >
        {!! $errors->first('egp_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name_of_works') ? 'has-error' : ''}}">
    <label for="name_of_works" class="col-md-4 control-label">{{ 'Name Of Works' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="name_of_works" type="textarea" id="name_of_works" >{{ $pecontract->name_of_works or ''}}</textarea>
        {!! $errors->first('name_of_works', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contractors_legal_title') ? 'has-error' : ''}}">
    <label for="contractors_legal_title" class="col-md-4 control-label">{{ 'Contractors Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contractors_legal_title" type="text" id="contractors_legal_title" value="{{ $pecontract->contractors_legal_title or ''}}" required >
        {!! $errors->first('contractors_legal_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contractors_contact_details') ? 'has-error' : ''}}">
    <label for="contractors_contact_details" class="col-md-4 control-label">{{ 'Contractors Contact Details' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="contractors_contact_details" type="textarea" id="contractors_contact_details" >{{ $pecontract->contractors_contact_details or ''}}</textarea>
        {!! $errors->first('contractors_contact_details', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contractors_trade_license_details') ? 'has-error' : ''}}">
    <label for="contractors_trade_license_details" class="col-md-4 control-label">{{ 'Contractors Trade License Details' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contractors_trade_license_details" type="text" id="contractors_trade_license_details" value="{{ $pecontract->contractors_trade_license_details or ''}}" >
        {!! $errors->first('contractors_trade_license_details', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('noa_reference') ? 'has-error' : ''}}">
    <label for="noa_reference" class="col-md-4 control-label">{{ 'Noa Reference' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="noa_reference" type="text" id="noa_reference" value="{{ $pecontract->noa_reference or ''}}" >
        {!! $errors->first('noa_reference', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('noa_date') ? 'has-error' : ''}}">
    <label for="noa_date" class="col-md-4 control-label">{{ 'Noa Date' }}</label>
    <div class="col-md-6">
        <input class="form-control datetimepicker" name="noa_date" type="date" id="noa_date" value="{{ $pecontract->noa_date or ''}}" >
        {!! $errors->first('noa_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('contract_date') ? 'has-error' : ''}}">
    <label for="noa_date" class="col-md-4 control-label">{{ 'Contract Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="contract_date" type="date" id="contract_date" value="{{ $pecontract->contract_date or ''}}" >
        {!! $errors->first('contract_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('original_contract_price') ? 'has-error' : ''}}">
    <label for="original_contract_price" class="col-md-4 control-label">{{ 'Original Contract Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="original_contract_price" type="text" id="original_contract_price" value="{{ $pecontract->original_contract_price or ''}}" >
        {!! $errors->first('original_contract_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('original_contract_completion_time') ? 'has-error' : ''}}">
    <label for="original_contract_completion_time" class="col-md-4 control-label">{{ 'Contract Completion Time(in Days)' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="original_contract_completion_time" type="text" id="original_contract_completion_time" value="{{ $pecontract->original_contract_completion_time or ''}}" >
        {!! $errors->first('original_contract_completion_time', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
