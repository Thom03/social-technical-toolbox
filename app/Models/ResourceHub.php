<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceHub extends Model
{
    use HasFactory;
    protected $table = 'resource_hubs';
    protected $fillable = [
        'type',
        'title',
        'authors',
        'description',
        'link',
        'image_link',
    ];
}
