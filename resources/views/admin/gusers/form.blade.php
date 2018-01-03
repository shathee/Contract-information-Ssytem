<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $guser->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('office') ? 'has-error' : ''}}">
    <label for="office" class="col-md-4 control-label">{{ 'Office' }}</label>
    <div class="col-md-6">
        <select name="office" class="form-control" id="office" required>
    @foreach ($peoffices as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($guser->office) && $guser->office == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('office', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
    <label for="designation" class="col-md-4 control-label">{{ 'Designation' }}</label>
    <div class="col-md-6">
        <select name="designation" class="form-control" id="designation" required >
    @foreach ($designation as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($guser->designation) && $guser->designation == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    <label for="mobile" class="col-md-4 control-label">{{ 'Mobile' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="mobile" type="text" id="mobile" value="{{ $guser->mobile or ''}}" >
        {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
