<?php
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'appointment_id',
        'total',
        'payment_status'
    ];

    protected $casts = [
        'total' => 'decimal:2'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}