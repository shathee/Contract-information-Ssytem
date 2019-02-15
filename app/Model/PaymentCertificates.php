<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentCertificates extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_certificates';

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
    protected $fillable = ['contract_id', 'bill_id','certificate_no','issuer_name'];


    public function contract()
    {
        return $this->hasOne('App\Model\Contract', 'id','contract_id');
    }

    public function bill()
    {
        return $this->hasMany('App\Model\Bill');
    }
    public function payment_certificate()
    {
        return $this->belongsToMany('App\Model\Bill','bills_payment_certificates','certificate_id','bill_id');
    }

}
