<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryData extends Model
{
    use HasFactory;

    protected $table = 'inventory_data';

    protected $fillable = [
        'dataset_url',
        'title',
        'country',
        'year',
        'organization',
        'collection',
        'study_id',
        'last_modified',
        'views',
        'data_access',
        'inventory_source',

    ];
}
