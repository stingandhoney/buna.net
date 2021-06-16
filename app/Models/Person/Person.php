<?php

namespace App\Models\Person;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'civility',
        'full_name',
        'birth_date',
        'gender'
    ];

    public function juries(): HasMany
    {
        return $this->hasMany(Jury::class);
    }

    public function diplomas(): BelongsToMany
    {
        return $this->belongsToMany(Diploma::class, 'graduates', 'person_id', 'diploma_id')
            ->withPivot(['diploma_obtaining_date', 'institution'])->as('graduates');
    }

    public function universities(): BelongsToMany
    {
        return $this->belongsToMany(Organism::class, 'inscriptions', 'person_id', 'organism_id')
            ->withPivot(['academic_year', 'ufr', 'level_of_study'])->as('inscriptions');
    }

    public function organisms(): BelongsToMany
    {
        return $this->belongsToMany(Organism::class, 'affiliates', 'person_id', 'organism_id')
            ->withPivot(['start_date', 'end_date'])->as('affiliates');
    }

}
