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
        'impact_id',
        'source',
        'access',
        'license',
        'contact',
        'DOI',
        'providers',
        'collection_period',
    ];

    public function region()
    {
        return $this->hasMany('App\Models\Region');
    }

    public function theme()
    {
        return $this->hasMany('App\Models\Theme');
    }

    public function impactarea()
    {
        return $this->hasMany('App\Models\ImpactArea');
    }


}
