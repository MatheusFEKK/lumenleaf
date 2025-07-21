<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'idNote';

    protected $fillable = [ 
        'idUser',
        'noteTitle',
        'noteDescription',
    ];

    public $incrementing = true;
    public $timestamps = true;

    const CREATED_AT = 'noteWhenCreated';
    const UPDATED_AT = 'noteLastChange';

    public function author()
    {
        return $this->belongsTo(UserModel::class, 'idUser');
    }

}
