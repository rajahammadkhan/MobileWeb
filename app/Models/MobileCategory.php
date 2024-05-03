<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileCategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_categories';
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
        return $this->hasMany(Mobile::class, 'operating_system_id');
    }
}
