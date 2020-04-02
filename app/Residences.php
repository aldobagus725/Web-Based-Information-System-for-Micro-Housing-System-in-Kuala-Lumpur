<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residences extends Model
{
    protected $table='residences';
    protected $fillable=['address','numunits','sizeperunits','monthlyrental'];
}
