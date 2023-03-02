<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subdistrict extends Model
{
    protected $table = 'sub-district';
    protected $primaryKey = 'id';
    protected $fillable = [
        'zipcode','name_th','name_en','_id'
    ];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
    public $timedtamp = false;
}
