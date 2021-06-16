<?php

namespace App\Models\Document;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medium extends Model
{
    use HasFactory;

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class, ['jury_id', 'author_id']);
    }
}
