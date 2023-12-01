<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';
    protected $primaryKey = 'EQUIPE_ID';
    public $incrementing = false;

    protected $fillable = [
        'EQUIPE_ID',
        'EQUIPE_NOM',
    ];

    public function scopeFindByNom($query, $nom)
    {
        return $query->where('EQUIPE_NOM', $nom);
    }

}
