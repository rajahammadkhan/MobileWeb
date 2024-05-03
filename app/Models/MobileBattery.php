<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileBattery extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_battery_info';
    protected $fillable = [
        'mobile_id',
        'is_remove',
        'capacity',
        'fast_charging',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
