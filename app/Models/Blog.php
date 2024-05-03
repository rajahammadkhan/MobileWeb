<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    use HasFactory,SoftDeletes;
    protected $table = 'blogs';
    protected $fillable = [
        'name',
        'media_id',
        'slug',
        'short_description',
        'long_description',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    protected $dates = ['deleted_at'];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
