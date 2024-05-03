<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileMedia extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_media';
    protected $fillable = [
        'mobile_id',
        'media_id',
        'is_feature',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
