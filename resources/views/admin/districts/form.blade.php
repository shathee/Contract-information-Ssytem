<div class="form-group {{ $errors->has('division_id') ? 'has-error' : ''}}">
    <label for="division_id" class="col-md-4 control-label">{{ 'Division Id' }}</label>
    <div class="col-md-6">
        <select name="division_id" class="form-control" id="division_id" >
    @foreach ($division as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($district->division_id) && $district->division_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('division_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $district->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bn_name') ? 'has-error' : ''}}">
    <label for="bn_name" class="col-md-4 control-label">{{ 'Bn Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="bn_name" type="text" id="bn_name" value="{{ $district->bn_name or ''}}" >
        {!! $errors->first('bn_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
    <label for="lat" class="col-md-4 control-label">{{ 'Lat' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lat" type="text" id="lat" value="{{ $district->lat or ''}}" >
        {!! $errors->first('lat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lon') ? 'has-error' : ''}}">
    <label for="lon" class="col-md-4 control-label">{{ 'Lon' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="lon" type="text" id="lon" value="{{ $district->lon or ''}}" >
        {!! $errors->first('lon', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
    <label for="website" class="col-md-4 control-label">{{ 'Website' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="website" type="text" id="website" value="{{ $district->website or ''}}" >
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
