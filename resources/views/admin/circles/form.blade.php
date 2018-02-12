<div class="form-group {{ $errors->has('zone_id') ? 'has-error' : ''}}">
    <label for="zone_id" class="col-md-4 control-label">{{ 'Zone Id' }}</label>
    <div class="col-md-6">
        <select name="zone_id" class="form-control" id="zone_id" >
            @foreach ($zone as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($circle->zone_id) && $circle->zone_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('zone_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $circle->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="col-md-4 control-label">{{ 'Address' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="address" type="textarea" id="address" >{{ $circle->address or ''}}</textarea>
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="col-md-4 control-label">{{ 'District' }}</label>
    <div class="col-md-6">
        <select name="district" class="form-control" id="district" >
    @foreach ($district as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($circle->district) && $circle->district == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $circle->phone or ''}}" >
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="code" type="text" id="code" value="{{ $circle->code or ''}}" >
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
