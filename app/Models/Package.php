<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

 protected $fillable = ['id', 'shipment_id', 'exp_description', 'rec_description', 'custshipment_id', 'tracking_number', 'package_image', 'description', 'price', 'weight', 'status', 'arrival_status'];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'shipment_id');
    }

    public function custshipment()
    {
        return $this->belongsTo(CustShipment::class, 'custshipment_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($package) {
            do {
                $package_id = time() . mt_rand(100, 999);
            } while (self::where('id', $package_id)->exists());

            $package->id = $package_id;
        });
    }
}
