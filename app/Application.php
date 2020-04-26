<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table='application';
    protected $primaryKey = 'applicationID';
    protected $fillable=['applicantID','residenceID','applicationDate','requiredMonth','requiredYear','status'];

}
