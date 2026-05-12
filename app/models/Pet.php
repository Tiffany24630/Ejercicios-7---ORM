<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'species_id',
        'breed_id',
        'name',
        'birth_date',
        'gender',
        'weight',
        'color'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'weight' => 'decimal:2'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function species()
    {
        return $this->belongsTo(Species::class);
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class)
            ->withPivot('application_date');
    }
}

