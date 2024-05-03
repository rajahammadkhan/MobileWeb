<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileOperatingSystem extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_operating_systems';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
