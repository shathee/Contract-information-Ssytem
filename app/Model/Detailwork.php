<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detailwork extends Model
{
   protected $table = 'detailworks';

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
    protected $fillable = ['detail_work_form_component_1', 'detail_work_form_component_1_value', 'detail_work_form_component_2', 'detail_work_form_component_2_value', 'detail_work_form_component_3', 'detail_work_form_component_3_value', 'lead_partner_name', 'jvca_lead_partner_work_form_component_1', 'jvca_lead_partner_work_form_component_1_value', 'jvca_lead_partner_work_form_component_2', 'jvca_lead_partner_work_form_component_2_value', 'jvca_lead_partner_work_form_component_3', 'jvca_lead_partner_work_form_component_3_value', 'co_partner1_name', 'jvca_co_partner1_work_form_component_1', 'jvca_co_partner1_work_form_component_1_value','jvca_co_partner1_work_form_component_2', 'jvca_co_partner1_work_form_component_2_value', 'jvca_co_partner1_work_form_component_3', 'jvca_co_partner1_work_form_component_3_value', 'co_partner2_name', 'jvca_co_partner2_work_form_component_1', 'jvca_co_partner2_work_form_component_1_value', 'jvca_co_partner2_work_form_component_2', 'jvca_co_partner2_work_form_component_2_value', 'jvca_co_partner2_work_form_component_3', 'jvca_co_partner2_work_form_component_3_value', 'contract_id','user_id'];

    public function contract()
    {
        return $this->belongsTo('App\Contract');
    }
}
