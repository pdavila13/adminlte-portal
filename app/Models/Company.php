<?php

namespace App\Models;

use App\Models\GroupVpn;
use App\Models\Petition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cif',
        'description',
        'status',
    ];

    // public function getRouteKeyName(): string
    // {
    //     return 'slug';
    // }

    public function groupVpn(): BelongsTo
    {
        return $this->belongsTo(GroupVpn::class);
    }

    public function petitions(): HasMany
    {
        return $this->hasMany(Petition::class);
    }
}
