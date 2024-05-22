<?php

namespace App\Models;

use App\Models\Petition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    public function petition(): HasMany
    {
        return $this->hasMany(Petition::class);
    }
}
