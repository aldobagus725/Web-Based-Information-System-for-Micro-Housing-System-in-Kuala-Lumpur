<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Applicant extends Authenticatable{
    use Notifiable;
    protected $table='applicants';
    protected $guard='applicant';
    protected $fillable = [
        'fullname', 'username', 'monthlyIncome', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}