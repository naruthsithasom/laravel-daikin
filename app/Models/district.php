<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    protected $table = 'district';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code','name_th','name_en','_id'
    ];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
    public $timedtamp = false;
}
