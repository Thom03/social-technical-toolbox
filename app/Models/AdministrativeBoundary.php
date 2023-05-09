<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministrativeBoundary extends Model
{
    use HasFactory;

    protected $table = 'adminstrativeboundary';

    protected $fillable = [
        'country',
        'admin_bound_1',
        'admin_bound_2',
        'admin_bound_3',
        ];

    public function datasets()
    {
        return $this->belongsToMany(Dataset::class);
    }
}
