<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class English extends Model
{
    use HasFactory;

    protected $table = 'english';

    protected $fillable = [
        'Image', 
        'TitleName',
        'MainCharacterCast',
        'EpisodeMovie',
        'ListOfEpisodeMovie',
        'GenreCategory',
        'Rate'
    ];
}
