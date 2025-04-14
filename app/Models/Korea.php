<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korea extends Model
{
    use HasFactory;

    protected $table = 'korea';

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
