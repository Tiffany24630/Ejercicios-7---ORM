<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
