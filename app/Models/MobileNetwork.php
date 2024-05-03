<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileNetwork extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_network_info';
    protected $fillable = [
        'mobile_id',
        'wlan',
        'bluetooth',
        'radio',
        'usb',
        'data',
        'g2',
        'g3',
        'g4',
        'g5',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
