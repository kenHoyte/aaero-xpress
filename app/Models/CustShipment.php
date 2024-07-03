<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustShipment extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keytype = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
       'id', 'tracking_number', 'user_id', 'price', 'status'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'custshipment_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($custshipment) {
            do {
                $custshipment_id = time() . mt_rand(100, 999);
            } while (self::where('id', $custshipment_id)->exists());

            $custshipment->id = $custshipment_id;
        });
    }
}
