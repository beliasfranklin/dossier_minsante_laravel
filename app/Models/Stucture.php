<?php
// app/Models/Structure.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'type', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Structure::class, 'parent_id');
    }

    public function enfants()
    {
        return $this->hasMany(Structure::class, 'parent_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
