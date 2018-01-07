<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contracts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['office_memo', 'memo_date', 'peoffice_id', 'circle_id', 'zone_id', 'others', 'name_of_works', 'contract_no', 'egp_id', 'contractors_legal_title', 'contractors_contact_details', 'contractorstrade_license_details', 'noa_reference', 'noa_date', 'original_contract_price', 'executed_contract_price', 'contract_date_of_commencement', 'contract_date_of_completion', 'actual_date_of_commencement', 'actual_contract_date_of_completion', 'days_contract_period_extended', 'amount_bonus_early_completion', 'amount_ld_delayed_completion', 'physical_progress', 'financial_progress', 'special_note'];

    
}
