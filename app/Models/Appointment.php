<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Appointment extends Model
{
    protected $fillable = [
        'client_id',
        'professional_id',
        'status',
        'notes',
        'total',
        'booked_at',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function professional(): BelongsTo
    {
        return $this->belongsTo(Professional::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionalService::class, 'appointment_professional_service', 'appointment_id', 'professional_service_id')
            ->using(AppointmentProfessionalService::class);
    }
}
