<?php

namespace App\Models;

use App\Models\GroupVpn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    public function groupVpn(): BelongsTo
    {
        return $this->belongsTo(GroupVpn::class);
    }
}