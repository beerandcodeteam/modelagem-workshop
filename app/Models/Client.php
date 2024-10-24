<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Client extends Model
{
    protected $fillable = [
        'cpf',
        'phone',
    ];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
