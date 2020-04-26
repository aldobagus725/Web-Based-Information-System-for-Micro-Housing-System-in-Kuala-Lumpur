<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $table='allocation';
    protected $primaryKey = 'applicationID';
    protected $fillable=['unitNo','fromDate','endDate','duration'];
}
