<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable = [
        'title_id',
        'title_en',
        'category_id',
        'category_en',
        'image',
        'description_id',
        'description_en',
        'list_id',
        'list_en',
        'created_by',
        'updated_by'
    ];
}
