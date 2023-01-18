<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wikbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'writter',
        'publisher',
        'isbn',
        'synopsis',
        'cover_book',
        'category_name',
    ];
}
