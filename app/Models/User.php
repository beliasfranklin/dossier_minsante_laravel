<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
        'structure_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }

    public function dossiersExpedies()
    {
        return $this->hasMany(Dossier::class, 'expediteur_id');
    }

    public function dossiersPossedes()
    {
        return $this->hasMany(Dossier::class, 'proprietaire_actuel_id');
    }
}
