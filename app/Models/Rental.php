<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'heavy_equipment_id',
        'customer_id',
        'rental_date',
        'return_date',
        'total_rental_price',
        'total_operator_price',
        'proof_of_payment',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $diffInDays = Carbon::parse($model->rental_date)->diffInDays($model->return_date);
            $model->total_rental_price = $model->heavyEquipment->rental_price * $diffInDays;
            $model->total_operator_price = $model->heavyEquipment->operator_price * $diffInDays;
            $model->status = 'pending';
        });

        static::updating(function ($model) {
            $diffInDays = Carbon::parse($model->rental_date)->diffInDays($model->return_date);
            $model->total_rental_price = $model->heavyEquipment->rental_price * $diffInDays;
            $model->total_operator_price = $model->heavyEquipment->operator_price * $diffInDays;
        });
    }

    public function heavyEquipment()
    {
        return $this->belongsTo(HeavyEquipment::class)->withDefault();
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id')->withDefault();
    }
}
