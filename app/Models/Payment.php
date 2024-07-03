<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'user_id', 'shipment_id', 'package_id', 'amount', 'payment_method', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($payment) {
            do {
                $payment_id = time() . mt_rand(100, 999);
            } while (self::where('id', $payment_id)->exists());

            $payment->id = $payment_id;
        });
    }
}
