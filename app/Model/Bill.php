<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bills';

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
    protected $fillable = ['contract_id', 'bill_no', 'bill_date', 'net_payment', 'vat', 'ait', 'gross_payment'];

    
    public function contract()
    {
        return $this->belongsTo('App\Model\Contract');
    }

    public function payment_certificate()
    {
        return $this->belongsToMany('App\Model\PaymentCertificates','bills_payment_certificates','bill_id','certificate_id');
    }
    
}
