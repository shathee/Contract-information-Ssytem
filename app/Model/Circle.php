<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'circles';

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
    protected $fillable = ['zone_id', 'name', 'address', 'district', 'phone', 'code'];

    public function zone()
    {
        return $this->belongsTo('App\Model\Zone');
    }
}
