<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotesCategories extends Model
{
    protected $table = 'notes_categories';
    protected $primaryKey = 'idNoteCategories';

    protected $fillable = [ 
        'idUser',
        'nameNoteCategories',
    ];

    public $timestamps = false;
}
