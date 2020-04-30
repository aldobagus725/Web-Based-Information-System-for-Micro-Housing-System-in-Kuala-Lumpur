<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HousingOfficer extends Authenticatable{
    use Notifiable;
    protected $table='housingofficers';
    protected $guard='housingofficer';
    
    protected $fillable = [
        'fullname', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
