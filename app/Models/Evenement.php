<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'antenne_id', 'prenom','age'];

    public function antenne(): BelongsTo
    {
        return $this->belongsTo(Antenne::class);
    }
}
