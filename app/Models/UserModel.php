<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserModel extends Authenticatable
{
    protected $table = '_user';
    
    protected $primaryKey = 'idUser';

    protected $hidden = [
        'passwordUser',
    ];

    protected $fillable = [
        'nameUser',
        'emailUser',
        'passwordUser',
    ];

    public $incrementing = true;
    public $timestamps = false;

}
