<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileBrand extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_brands';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function mobiles()
    {
        return $this->hasMany(Mobile::class, 'brand_id');
    }
}
