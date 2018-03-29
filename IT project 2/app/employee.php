<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = "employee";
    protected $primaryKey = 'emp_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
	