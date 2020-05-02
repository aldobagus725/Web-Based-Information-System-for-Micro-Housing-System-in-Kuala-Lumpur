<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Allocation extends Model{
    protected $table='allocation';
    protected $fillable=['unitNo','fromDate','endDate','duration'];
}
