<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mydatabase extends Model
{
    use HasFactory;
    
    protected $table = 'mydatabase';

    protected $fillable = [
        'Calendar', 
        'FolderName',
        'FolderInformation',
        'InsertPDF',
    ];
}
