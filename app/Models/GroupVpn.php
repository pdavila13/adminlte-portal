<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupVpn extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'network',
        'description',
        'company_id',
    ];

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
