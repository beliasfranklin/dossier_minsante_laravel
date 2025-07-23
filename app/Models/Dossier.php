<?php
// app/Models/Dossier.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'intitule',
        'type',
        'date_creation',
        'statut',
        'expediteur_id',
        'proprietaire_actuel_id'
    ];

    public function expediteur()
    {
        return $this->belongsTo(User::class, 'expediteur_id');
    }

    public function proprietaireActuel()
    {
        return $this->belongsTo(User::class, 'proprietaire_actuel_id');
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }

    public function notificationsWhatsApp()
    {
        return $this->hasMany(NotificationWhatsApp::class);
    }

    public function historiqueSejours()
    {
        return $this->hasMany(HistoriqueSejourMembre::class);
    }
}
