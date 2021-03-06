<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commencement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commencements';

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
    protected $fillable = ['user_id','commencement_memo_no', 'commencement_memo_date', 'contract_id', 'contract_commencement_date', 'insurance_policy_date', 'programme_date','commencement_clause_no','commencement_condition_1','commencement_condition_2','commencement_condition_3','commencement_contract_description'];

    
    public function contract()
    {
        return $this->belongsTo('App\Model\Contract');
    }

}
