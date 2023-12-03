<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'date_limite_inscription',
        'description',
        'image',
        'is_clotured',
        'date_evenement',
        'association_id', // Ajoutez association_id à la liste des fillables

    
    ];

    public function Association()
    {
        return $this->belongsTo(Association::class);
    }

}