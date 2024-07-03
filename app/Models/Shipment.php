<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
       'id', 'tracking_number', 'custshipment_id', 'user_id', 'price', 'status', 'received', 'in_transit', 'ready', 'delivered'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'shipment_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($shipment) {
            do {
                $shipment_id = time() . mt_rand(100, 999);
            } while (self::where('id', $shipment_id)->exists());

            $shipment->id = $shipment_id;
        });
    }
}
