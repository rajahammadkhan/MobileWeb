<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileCam extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_cam_info';
    protected $fillable = [
        'type_id',
        'mobile_id',
        'no_of_cams',
        'cam_size',
        'cam_text',
        'led',
        'face_detection',
        'geo',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class, 'mobile_id');
    }
}
