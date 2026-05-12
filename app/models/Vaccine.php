<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer'
    ];

    public function pets()
    {
        return $this->belongsToMany(Pet::class)
            ->withPivot('application_date');
    }
}