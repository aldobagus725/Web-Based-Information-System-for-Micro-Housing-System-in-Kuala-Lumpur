<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table='application';
    protected $primaryKey = 'unitNo';
    protected $fillable=['availability','residenceID'];
}
