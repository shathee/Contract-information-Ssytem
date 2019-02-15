<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

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
    protected $fillable = ['name', 'code', 'cost', 'start_date', 'end_date', 'fund'];


    public function peoffice()
    {
        return $this->belongsToMany('App\Model\Peoffice');
    }

    public function contracts()
    {
        return $this->hasMany('App\Model\Contract');
    }
    
}
