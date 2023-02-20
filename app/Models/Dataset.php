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
        'user_id',
        'title',
        'author',
        'release_year',
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
