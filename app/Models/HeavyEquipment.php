<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeavyEquipment extends Model
{
    use HasFactory;

    protected $table = 'heavy_equipments';

    protected $fillable = [
        'name',
        'image',
        'rental_price',
        'operator_price',
    ];
}
