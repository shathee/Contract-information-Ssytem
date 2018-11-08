<div class="form-group {{ $errors->has('contract_id') ? 'has-error' : ''}}">
    <label for="contract_id" class="col-md-4 control-label">{{ 'Contract Id' }}</label>
    <div class="col-md-6">
        <select name="contract_id" class="form-control" id="contract_id" >
            @foreach ($contracts as $optionKey => $optionValue)
                <option value="{{ $optionKey }}" {{ (isset($bill->contract_id) && $bill->contract_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('contract_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bill_no') ? 'has-error' : ''}}">
    <label for="bill_no" class="col-md-4 control-label">{{ 'Bill No' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="bill_no" type="text" id="bill_no" value="{{ $bill->bill_no or ''}}" required>
        {!! $errors->first('bill_no', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bill_date') ? 'has-error' : ''}}">
    <label for="bill_date" class="col-md-4 control-label">{{ 'Bill Date' }}</label>
    <div class="col-md-6">
        <input class="form-control date_picker" name="bill_date" type="text" id="bill_date" value="{{ $bill->bill_date or ''}}" required>
        {!! $errors->first('bill_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gross_payment') ? 'has-error' : ''}}">
    <label for="gross_payment" class="col-md-4 control-label">{{ 'Gross Payment' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="gross_payment" type="text" id="gross_payment" onkeyup="netBill()" value="{{ $bill->gross_payment or ''}}" required >
        {!! $errors->first('gross_payment', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('vat') ? 'has-error' : ''}}">
    <label for="vat" class="col-md-4 control-label">{{ 'Vat' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="vat" type="text" onkeyup="netBill()" id="vat" value="{{ $bill->vat or ''}}" required>
        {!! $errors->first('vat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ait') ? 'has-error' : ''}}">
    <label for="ait" class="col-md-4 control-label">{{ 'Ait' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ait" type="text" id="ait" onkeyup="netBill()" value="{{ $bill->ait or ''}}" required>
        {!! $errors->first('ait', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('net_payment') ? 'has-error' : ''}}">
    <label for="net_payment" class="col-md-4 control-label">{{ 'Net Payment' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="net_payment" type="text" id="net_payment" value="{{ $bill->net_payment or ''}}" required>
        {!! $errors->first('net_payment', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

