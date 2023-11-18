<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'District',
        'Duration',
        'Price',
        'Description',
        'image',
        'number',
    ];
}
