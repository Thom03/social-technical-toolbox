<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechPrac extends Model
{
    use HasFactory;

    protected $table = 'tech_pracs';

    protected $fillable = ['name', 'description'];

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }
}
