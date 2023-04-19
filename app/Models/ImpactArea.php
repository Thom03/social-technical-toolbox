<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpactArea extends Model
{
    use HasFactory;


    protected $table = 'impact_areas';
    protected $fillable = ['name'];


    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }


}
