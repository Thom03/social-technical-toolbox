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
        'resource_files',
        'source',
        'access',
        'license',
        'contact',
        'DOI',
        'collection_period',
        'data_type',
        'methods',
        'resillience_indicators',
        'observations',
        'status',

    ];

    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }

    public function theme()
    {
        return $this->hasMany('App\Models\Theme');
    }

    public function impactAreas()
    {
        return $this->belongsToMany(ImpactArea::class, 'dataset_impact_area', 'dataset_id', 'impact_area_id');
    }

    public function techPracs()
    {
        return $this->belongsToMany(TechPrac::class);
    }


    public function innovations()
    {
        return $this->belongsToMany(Innovation::class);
    }
    public function administrativeBoundaries()
    {
        return $this->hasMany(AdministrativeBoundary::class, 'dataset_id');
    }

    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'dataset_provider', 'dataset_id', 'provider_id');
    }

    public function clusters()
    {
        return $this->belongsToMany(Cluster::class);
    }



}
