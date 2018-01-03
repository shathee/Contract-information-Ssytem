<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'districts';

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
    protected $fillable = ['division_id', 'name', 'bn_name', 'lat', 'lon', 'website'];

    public function division()
    {
        return $this->belongsTo('App\Model\Division');
    }

    public function zone()
    {
        return $this->hasMany('App\Model\Zone');
    }


}
