<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CertificateFile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'certificate_files';

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
    protected $fillable = ['id', 'certificate_no', 'file_path', 'type'];


    public function contract()
    {
        return $this->belongsTo('App\Model\Contract','certificate_no','certificate_no');
    }


    
}
