<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Japanese extends Model
{
    use HasFactory;

    protected $table = 'japanese';

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
