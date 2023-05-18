<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'providers';

    protected $fillable = ['identifier','name','url'];


    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }
}
