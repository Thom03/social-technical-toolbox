<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'datasets';

    protected $fillable = [
        'title',
        'author',
        'release_year',
        'region_id',
        'theme_id',
        'resource_files',
        'source',
        'access',
        'license',
        'contact',
        'DOI',
        'providers',
        'collection_period',
        'data_type',
        'methods',
        'technology_practice',
        'gender_responsive',
        'innovations',
        'resillience_indicators',
        'observations',

    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function theme()
    {
        return $this->hasMany('App\Models\Theme');
    }

    public function impactarea()
    {
        return $this->belongsToMany(ImpactArea::class);
    }



}
