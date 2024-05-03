<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'media';
    protected $fillable = [
        'u_id',
        'unique_name',
        'link',
        'base_url',
        'extension',
        'size',
        'alt_tag',
        'title',
        'batch_no',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];

    public function mobiles()
    {
        return $this->belongsToMany(Mobile::class, 'mobile_media', 'media_id', 'mobile_id')
            ->withPivot(['is_feature']);
    }
}
