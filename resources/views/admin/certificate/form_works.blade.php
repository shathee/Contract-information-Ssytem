<div class="row">
<!--
    <div class="col-md-12 text-center">
        <a href="{{URL::to('/')}}" class="align-self-center">
            <img id="logo" src={{asset('img/bwdb-logo.png')}} alt="Logo">
        </a>
    </div>
-->

</div>

<table class="table">
    <tr>
        <td>
            <div class="form-group {{ $errors->has('office_memo') ? 'has-error' : ''}}">
                <label for="office_memo" class="col-md-8 control-label">{{ 'Office Memo' }}</label>
                <div class="col-md-10">
                    <input class="form-control" name="office_memo" type="text" id="office_memo" value="{{ $contract->office_memo or ''}}" required >
                    {!! $errors->first('office_memo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
        <td class="float-right">
            <div class="form-group {{ $errors->has('memo_date') ? 'has-error' : ''}} ">
                <label for="memo_date" class="col-md-10 control-label">{{ 'Memo Date' }}</label>
                <div class="col-md-10 float-right">
                    <input class="form-control date_picker" name="memo_date" type="text" id="memo_date" value="{{ $contract->memo_date or ''}}" required >
                    {!! $errors->first('memo_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
</table>

<h4 class="text-center">COMPLETION CERTIFICATE</h4>

<table class="table  table-bordered ">
    <tr>
        <td style="width: 40%;">
            <label for="peoffice_id" class="col-md-8 control-label">{{ 'Division' }}</label>
            
        </td>
        <td>
            <div class="form-group {{ $errors->has('peoffice_id') ? 'has-error' : ''}}">
                <div class="col-md-10">
                    <select name="peoffice_id" class="form-control disabled" id="peoffice_id" >
                        @foreach ($peoffice as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($contract->peoffice_id) && $contract->peoffice_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('peoffice_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="circle_id" class="col-md-8 control-label">{{ 'Circle Id'  }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('circle_id') ? 'has-error' : ''}}">
        
            <div class="col-md-10">
                @if(!empty($contract->circle->name)) 
                <select name="circle_id" class="form-control disabled" id="circle_id" >
                        @foreach ($circle as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($contract->circle_id) && $contract->circle_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                </select>
                @else
                    <input class="form-control"  name="circle_id" type="text" id="circle_id" value="{{''}}" disabled >
                @endif
                
                {!! $errors->first('circle_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="zone_id" class="col-md-8 control-label">{{ 'Zone Id' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('zone_id') ? 'has-error' : ''}}">
    
                <div class="col-md-10">
                    @if(!empty($contract->zone->name)) 
                    <select name="zone_id" class="form-control disabled" id="zone_id">
                        @foreach ($zone as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($contract->zone_id) && $contract->zone_id == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                    </select>
                    @else
                        <input class="form-control"  name="zone_id" type="text" id="zone_id" value="{{''}}" disabled >
                    @endif
                    
                    {!! $errors->first('zone_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="others" class="col-md-8 control-label">{{ 'Others' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('others') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="others" type="text" id="others" value="{{ $contract->others or ''}}" >
                    {!! $errors->first('others', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="name_of_works" class="col-md-8 control-label">{{ 'Name Of Works' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('name_of_works') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <textarea class="form-control" rows="5" name="name_of_works" type="textarea" id="name_of_works" required readonly>{{ $contract->name_of_works or ''}}
                    </textarea>
                    {!! $errors->first('name_of_works', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="contract_no" class="col-md-8 control-label">{{ 'Contract No' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contract_no') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="contract_no" type="text" id="contract_no" value="{{ $contract->contract_no or ''}}" readonly >
                    {!! $errors->first('contract_no', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="egp_id" class="col-md-8 control-label">{{ 'Egp Id' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('egp_id') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="egp_id" type="text" id="egp_id" value="{{ $contract->egp_id or ''}}" readonly >
                    {!! $errors->first('egp_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="contractors_legal_title" class="col-md-8 control-label">{{ 'Contractors Legal Title' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contractors_legal_title') ? 'has-error' : ''}}">
            
            <div class="col-md-10">
                <input class="form-control" name="contractors_legal_title" type="text" id="contractors_legal_title" value="{{ $contract->contractors_legal_title or ''}}" readonly >
                {!! $errors->first('contractors_legal_title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="contractors_contact_details" class="col-md-8 control-label">{{ 'Contractors Contact Details' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contractors_contact_details') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <textarea class="form-control" rows="5" name="contractors_contact_details" type="textarea" id="contractors_contact_details" readonly >{{ $contract->contractors_contact_details or ''}}</textarea>
                    {!! $errors->first('contractors_contact_details', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="contractors_trade_license_details" class="col-md-8 control-label">{{ 'Contractorstrade License Details' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contractors_trade_license_details') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <textarea class="form-control" rows="5" name="contractors_trade_license_details" type="textarea" id="contractors_trade_license_details" >{{ $contract->contractors_trade_license_details or ''}}</textarea>
                    {!! $errors->first('contractors_trade_license_details', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="noa_reference" class="col-md-8 control-label">{{ 'Noa Reference' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('noa_reference') ? 'has-error' : ''}}">
            
            <div class="col-md-10">
                <input class="form-control" name="noa_reference" type="text" id="noa_reference" value="{{ $contract->noa_reference or ''}}" required>
                {!! $errors->first('noa_reference', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        </td>
    </tr>
    <tr>
        <td>
             <label for="noa_date" class="col-md-8 control-label">{{ 'Noa Date' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('noa_date') ? 'has-error' : ''}}">
               
                <div class="col-md-10">
                    <input class="form-control" name="noa_date" type="text" id="noa_date" value="{{ $contract->noa_date or ''}}" readonly required >
                    {!! $errors->first('noa_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="original_contract_price" class="col-md-8 control-label">{{ 'Original Contract Price' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('original_contract_price') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="" type="text" id="" value="{{  Format::number($contract->original_contract_price,3, ".", ",") }}"readonly >
                    <input class="form-control" name="original_contract_price" type="hidden" id="original_contract_price" value="{{  $contract->original_contract_price }}" required readonly >
                    {!! $errors->first('original_contract_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
             <label for="executed_contract_price" class="col-md-10 control-label">{{ 'Executed Contract Price' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('executed_contract_price') ? 'has-error' : ''}}">
               
                <div class="col-md-10">
                    <input class="form-control" name="executed_contract_price" type="text" id="executed_contract_price" value="{{ $contract->executed_contract_price or ''}}" >
                    <span class="text-info">Bill Paid: {{  Format::number($contract->bills->sum('gross_payment'),3, ".", ",")}}</span>
                    {!! $errors->first('executed_contract_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
             <label for="contract_date_of_commencement" class="col-md-8 control-label">{{ 'Contract Date Of Commencement' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contract_date_of_commencement') ? 'has-error' : ''}}">
               
                <div class="col-md-10">
                    <input class="form-control" name="contract_date_of_commencement" type="text" id="contract_date_of_commencement" value="{{ $contract->contract_date_of_commencement or ''}}" required readonly >
                    {!! $errors->first('contract_date_of_commencement', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
             <label for="contract_date_of_completion" class="col-md-8 control-label">{{ 'Contract Date Of Completion' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('contract_date_of_completion') ? 'has-error' : ''}}">
               
                <div class="col-md-10">
                    <input class="form-control date_picker" name="contract_date_of_completion" type="text" id="contract_date_of_completion" value="{{ $contract->contract_date_of_completion or ''}}" required>
                    {!! $errors->first('contract_date_of_completion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="actual_date_of_commencement" class="col-md-8 control-label">{{ 'Actual Date Of Commencement' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('actual_date_of_commencement') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control date_picker" name="actual_date_of_commencement" type="text" id="actual_date_of_commencement" value="{{ $contract->actual_date_of_commencement or ''}}" required>
                    {!! $errors->first('actual_date_of_commencement', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="actual_contract_date_of_completion" class="col-md-8 control-label">{{ 'Actual Contract Date Of Completion' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('actual_contract_date_of_completion') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control date_picker" name="actual_contract_date_of_completion" type="text" id="actual_contract_date_of_completion" value="{{ $contract->actual_contract_date_of_completion or ''}}" >
                    {!! $errors->first('actual_contract_date_of_completion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="days_contract_period_extended" class="col-md-8 control-label">{{ 'Days/Months Contract Period Extended' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('days_contract_period_extended') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="days_contract_period_extended" type="number" id="days_contract_period_extended" value="{{ $contract->days_contract_period_extended or ''}}" >

                    {!! $errors->first('days_contract_period_extended', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="amount_bonus_early_completion" class="col-md-8 control-label">{{ 'Amount Bonus Early Completion' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('amount_bonus_early_completion') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="amount_bonus_early_completion" type="number" id="amount_bonus_early_completion" value="{{ $contract->amount_bonus_early_completion or ''}}" >
                    {!! $errors->first('amount_bonus_early_completion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="amount_ld_delayed_completion" class="col-md-8 control-label">{{ 'Amount Ld Delayed Completion' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('amount_ld_delayed_completion') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="amount_ld_delayed_completion" type="number" id="amount_ld_delayed_completion" value="{{ $contract->amount_ld_delayed_completion or ''}}" >
                    {!! $errors->first('amount_ld_delayed_completion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="physical_progress" class="col-md-8 control-label">{{ 'Physical Progress in Percent (in terms of value)' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('physical_progress') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="physical_progress" type="text" id="physical_progress" value="{{ $contract->physical_progress or ''}}" required >
                    {!! $errors->first('physical_progress', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="financial_progress" class="col-md-8 control-label">{{ 'Financial Progress in Amount(in terms of payment)' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('financial_progress') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <input class="form-control" name="financial_progress" type="text" id="financial_progress" value="{{ $contract->financial_progress or ''}}" required >

                    {!! $errors->first('financial_progress', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <label for="special_note" class="col-md-8 control-label">{{ 'Special Note (if any)' }}</label>
        </td>
        <td>
            <div class="form-group {{ $errors->has('special_note') ? 'has-error' : ''}}">
                
                <div class="col-md-10">
                    <textarea class="form-control" rows="5" name="special_note" type="textarea" id="special_note" >{{ $contract->special_note or ''}}</textarea>
                    {!! $errors->first('special_note', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#detailWorkInformationForm" aria-expanded="false" aria-controls="detailWorkInformationForm">
                Detail Work information form
            </button>
        
            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#JvInformationForm" aria-expanded="false" aria-controls="JvInformationForm">
                JVCA information form
            </button>
        </td>
    </tr>
    
</table>
<div class="collapse" id="detailWorkInformationForm">
    <table class="table table-bordered">
        <tr>
            <td colspan="3">
                <h4 class="text-center">Details of Works Completed</h4>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h5 class="text-center">Contractor: {{ $contract->contractors_legal_title}}</h5>
            </td>
        </tr>
        <tr>
            <th>
                No
            </th>
            <th>
                Major Components of Works
            </th>
            <th>
                Total Value (in Contract Currency)
            </th>
        </tr>
        <tr>
            <td>
                1.
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_1') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_1" type="text" id="detail_work_form_component_1" value="" >
                        {!! $errors->first('detail_work_form_component_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_1_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_1_value" type="text" id="detail_work_form_component_1_value" value="" >
                        {!! $errors->first('detail_work_form_component_1_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                2.
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_2') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_2" type="text" id="detail_work_form_component_2" value="" >
                        {!! $errors->first('detail_work_form_component_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_2_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_2_value" type="text" id="detail_work_form_component_2_value" value="" >
                        {!! $errors->first('detail_work_form_component_2_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                3.
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_3') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_3" type="text" id="detail_work_form_component_3" value="" >
                        {!! $errors->first('detail_work_form_component_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('detail_work_form_component_3_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="detail_work_form_component_3_value" type="text" id="detail_work_form_component_3_value" value="" >
                        {!! $errors->first('detail_work_form_component_3_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>

        
    </table>
</div>

<div class="collapse" id="JvInformationForm">
    <table class="table  table-bordered ">
        <tr>
            <td colspan="3">
                <h5 class="text-center">Joint Venture</h5>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h5 class="text-center">Leading Partner:
                    <div class="form-group {{ $errors->has('lead_partner_name') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="lead_partner_name" type="text" id="lead_partner_name" value="" >
                        {!! $errors->first('lead_partner_name', '<p class="help-block">:message</p>') !!}
                    </div>
                    </div>
                </h5>
            </td>
        </tr>
        <tr>
            <th>
                No
            </th>
            <th>
                Major Components of Works
            </th>
            <th>
                Total Value (in Contract Currency)
            </th>
        </tr>
        <tr>
            <td>
                1.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_1') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_1" type="text" id="jvca_lead_partner_work_form_component_1" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_1_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_1_value" type="text" id="jvca_lead_partner_work_form_component_1_value" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_1_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                2.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_2') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_2" type="text" id="jvca_lead_partner_work_form_component_2" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_2_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_2_value" type="text" id="jvca_lead_partner_work_form_component_2_value" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_2_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                3.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_3') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_3" type="text" id="jvca_lead_partner_work_form_component_3" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_lead_partner_work_form_component_3_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_lead_partner_work_form_component_3_value" type="text" id="jvca_lead_partner_work_form_component_3_value" value="" >
                        {!! $errors->first('jvca_lead_partner_work_form_component_3_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
       
    </table>
    <table class="table table-bordered ">
    <tr>
        <td colspan="3">
            <h5 class="text-center">Co-partner:  
            <div class="form-group {{ $errors->has('co_partner1_name') ? 'has-error' : ''}}">
                <div class="col-md-10">
                    <input class="form-control" name="co_partner1_name" type="text" id="co_partner1_name" value="" >
                    {!! $errors->first('co_partner1_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            </h5>
        </td>
    </tr>
    <tr>
        <th>
            No
        </th>
        <th>
            Major Components of Works
        </th>
        <th>
            Total Value (in Contract Currency)
        </th>
    </tr>
    <tr>
            <td>
                1.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_1') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_1" type="text" id="jvca_co_partner1_work_form_component_1" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_1_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_1_value" type="text" id="jvca_co_partner1_work_form_component_1_value" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_1_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                2.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_2') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_2" type="text" id="jvca_co_partner1_work_form_component_2" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_2_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_2_value" type="text" id="jvca_co_partner1_work_form_component_2_value" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_2_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                3.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_3') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_3" type="text" id="jvca_co_partner1_work_form_component_3" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner1_work_form_component_3_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner1_work_form_component_3_value" type="text" id="jvca_co_partner1_work_form_component_3_value" value="" >
                        {!! $errors->first('jvca_co_partner1_work_form_component_3_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
</table>

<table class="table  table-bordered ">
    <tr>
        <td colspan="3">
            <h5 class="text-center">Co-partner: 
                <div class="form-group {{ $errors->has('co_partner2_name') ? 'has-error' : ''}}">
                <div class="col-md-10">
                    <input class="form-control" name="co_partner2_name" type="text" id="co_partner2_name" value="" >
                    {!! $errors->first('co_partner2_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            </h5>
        </td>
    </tr>
    <tr>
        <th>
            No
        </th>
        <th>
            Major Components of Works
        </th>
        <th>
            Total Value (in Contract Currency)
        </th>
    </tr>
    
    <tr>
            <td>
                1.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_1') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_1" type="text" id="jvca_co_partner2_work_form_component_1" value="" >
                        {!! $errors->first('jvca_co_partner2_work_form_component_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_1_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_1_value" type="text" id="jvca_co_partner2_work_form_component_1_value" value="" >
                        {!! $errors->first('jvca_co_partner2_work_form_component_1_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                2.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_2') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_2" type="text" id="jvca_co_partner2_work_form_component_2" value="" >
                        {!! $errors->first('jvca_co_partner2_work_form_component_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_2_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_2_value" type="text" id="jvca_co_partner2_work_form_component_2_value" value="" >
                        {!! $errors->first('jvca_co_partner2_work_form_component_2_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                3.
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_3') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_3" type="text" id="jvca_co_partner2_work_form_component_3" value="" >
                        {!! $errors->first('jvca_co_partner3_work_form_component_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
            <td>
                <div class="form-group {{ $errors->has('jvca_co_partner2_work_form_component_3_value') ? 'has-error' : ''}}">
                    <div class="col-md-10">
                        <input class="form-control" name="jvca_co_partner2_work_form_component_3_value" type="text" id="jvca_co_partner2_work_form_component_3_value" value="" >
                        {!! $errors->first('jvca_co_partner2_work_form_component_3_value', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </td>
        </tr>
</table>

</div>




<table class="table">
    <tr>
        <td>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                    <div class="col-md-offset-4 col-md-8">
                    <input onClick="confSubmit(this.form);" class="btn btn-primary" type="button" value="{{ $submitButtonText or 'Create' }}">

                </div>
                </div>

            </div>
        </td>
        <td></td>
    </tr>
</table>



<script type="text/javascript">

function confSubmit(form) {
if (confirm("Are you sure you want to submit the form? After Submission this Certificate will be Locked")) {
form.submit();
}

else {
alert("You decided to not submit the form!");
return false;
}
}
</script>





