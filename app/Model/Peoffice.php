<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Peoffice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'peoffices';

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
    protected $fillable = ['zone_id', 'circle_id', 'name', 'address', 'district_id', 'postcode', 'phone', 'code'];


    public function circle()
    {
        return $this->belongsTo('App\Model\Circle');
    }

    public function zone()
    {
        return $this->belongsTo('App\Model\Zone');
    }

    public function district()
    {
        return $this->belongsTo('App\Model\District');
    }
    
    
}
