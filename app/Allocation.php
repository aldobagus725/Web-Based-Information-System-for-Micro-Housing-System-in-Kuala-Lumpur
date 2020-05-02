<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Allocation extends Model
{
    protected $table='allocation';
    //protected $primaryKey = 'applicationID';
    protected $fillable=['unitNo','fromDate','endDate','duration'];
//    protected $dates = ['endDate'];
}
