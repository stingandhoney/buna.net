<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jury extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function president(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'president_id', 'id', 'people');
    }

    public function directeurs(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'juries_directeurs', 'jury_id', 'directeur_id');
    }

    public function examinateurs(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'juries_examinateurs', 'jury_id', 'examinateur_id');
    }

    public function encadreurs(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'juries_encadreurs', 'jury_id', 'encadreur_id');
    }

    public function rapporteurs(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'juries_rapporteurs', 'jury_id', 'rapporteur_id');
    }
}
