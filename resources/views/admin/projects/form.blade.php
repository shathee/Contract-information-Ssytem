<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $project->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="col-md-4 control-label">{{ 'Code' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="code" type="text" id="code" value="{{ $project->code or ''}}" >
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    <label for="cost" class="col-md-4 control-label">{{ 'Cost' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cost" type="text" id="cost" value="{{ $project->cost or ''}}" >
        {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="col-md-4 control-label">{{ 'Start Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="start_date" type="date" id="start_date" value="{{ $project->start_date or ''}}" >
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="col-md-4 control-label">{{ 'End Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="end_date" type="date" id="end_date" value="{{ $project->end_date or ''}}" >
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fund') ? 'has-error' : ''}}">
    <label for="fund" class="col-md-4 control-label">{{ 'Fund' }}</label>
    <div class="col-md-6">
        <!--
        <select name="fund" class="form-control custom-select" id="fund" multiple>
            @foreach ($fund as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($project->fund) && $project->fund == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
    -->
        {!! $errors->first('fund', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('peoffice_id') ? 'has-error' : ''}}">
    <label for="peoffice_id" class="col-md-4 control-label">{{ 'Peoffice Id' }}</label>
    <div class="col-md-6">
        
        <select name="peoffice_id[]" class="form-control custom-select" id="peoffice_id"  multiple >
            @foreach ($peoffice as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($peoffice->id) && $peoffice->id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        <!--<input class="form-control" name="peoffice_id" type="text" id="peoffice_id" value="{{ $project->peoffice_id or ''}}" >-->
        {!! $errors->first('peoffice_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
