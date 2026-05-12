<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'price'
    ];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}