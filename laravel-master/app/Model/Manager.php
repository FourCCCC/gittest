<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table='manager';
    protected $primaryKey='manager_id';
    public  $timestamps=false;
    protected $guarded = [];
}
