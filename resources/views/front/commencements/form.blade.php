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
    </div>
    <div class="form-group {{ $errors->has('contract_id') ? 'has-error' : ''}}">
        <label for="contract_id" class="col-md-4 control-label">{{ 'Contract Package No' }}</label>
        <div class="col-md-6">
            <select name="contract_id" class="form-control" id="contract_id" required>
                @foreach ($contracts as $optionKey => $optionValue)
                    <option value="{{ $optionKey }}" {{ (isset($commencement->contract_no) && $commencement->contract_no == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                @endforeach
            </select>
            <!--<input class="form-control" name="contract_no" type="text" id="contract_no" value="{{ $commencement->contract_no or ''}}" >-->
            {!! $errors->first('contract_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('contract_commencement_date') ? 'has-error' : ''}}">
        <label for="contract_commencement_date" class="col-md-4 control-label">{{ 'Contract Commencement Date' }}</label>
        <div class="col-md-6">
            <input class="form-control" name="contract_commencement_date" type="date" id="contract_commencement_date" value="{{ $commencement->contract_commencement_date or ''}}" >
            {!! $errors->first('contract_commencement_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div><div class="form-group {{ $errors->has('insurance_policy_date') ? 'has-error' : ''}}">
        <label for="insurance_policy_date" class="col-md-4 control-label">{{ 'Insurance Policy Date' }}</label>
        <div class="col-md-6">
            <input class="form-control" name="insurance_policy_date" type="date" id="insurance_policy_date" value="{{ $commencement->insurance_policy_date or ''}}" >
            {!! $errors->first('insurance_policy_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div><div class="form-group {{ $errors->has('programme_date') ? 'has-error' : ''}}">
        <label for="programme_date" class="col-md-4 control-label">{{ 'Programme Date' }}</label>
        <div class="col-md-6">
            <input class="form-control" name="programme_date" type="date" id="programme_date" value="{{ $commencement->programme_date or ''}}" >
            {!! $errors->first('programme_date', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-4 col-md-4">
            <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
        </div>
    </div>
