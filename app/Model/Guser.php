<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gusers';

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
    protected $fillable = ['name', 'user_id', 'peoffice_id', 'designation', 'mobile'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function peoffice()
    {
        return $this->belongsTo('App\Model\Peoffice');
    }
    
}
