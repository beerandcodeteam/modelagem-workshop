<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(Professional::class)
            ->using(ProfessionalService::class);
    }
}
