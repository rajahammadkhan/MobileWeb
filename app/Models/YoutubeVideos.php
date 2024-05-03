<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class YoutubeVideos extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'youtube_videos';
    protected $fillable = [
        'mobile_id',
        'video_link',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
