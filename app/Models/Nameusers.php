<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nameusers extends Model
{
    use HasFactory;

    protected $table = 'nameusers';

    protected $fillable = [
        'Image', 
        'Name',
        'Status',
        'Description',
    ];

}
