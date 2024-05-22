<?php

namespace App\Models;

use App\Models\Petition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PetitionType extends Model
{
    use HasFactory;

    public function petitions(): HasMany
    {
        return $this->hasMany(Petition::class);
    }
}
