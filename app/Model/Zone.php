<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zones';

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
    protected $fillable = ['name', 'address', 'district_id', 'phone', 'code'];


    public function circle()
    {
        return $this->hasMany('App\Model\Circle');
    }

    public function district()
    {
        return $this->belongsTo('App\Model\District');
    }

    
}
