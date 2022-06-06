<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    protected $table = 'informations';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
