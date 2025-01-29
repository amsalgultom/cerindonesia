<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    
    protected $table = 'team';
    protected $fillable = [
        'id',
        'name',
        'specialist',
        'position',
        'description_id',
        'description_en',
        'image',
        'email',
        'linkedin',
        'created_by',
        'updated_by'
    ];
}
