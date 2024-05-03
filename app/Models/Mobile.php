<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobiles';
    protected $fillable = [
        'u_id',
        'name',
        'price_pkr',
        'price_usd',
        'slug',
        'short_description',
        'long_description',
        'brand_id',
        'category_id',
        'status_id',
        'operating_system_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function brand()
    {
        return $this->belongsTo(MobileBrand::class, 'brand_id');
    }

    public function operating()
    {
        return $this->belongsTo(MobileOperatingSystem::class, 'operating_system_id');
    }

    public function featuredMedia()
    {
        return $this->belongsToMany(Media::class, 'mobile_media', 'mobile_id', 'media_id')
            ->wherePivot('is_feature', 1)
            ->select(['media.*', 'mobile_media.is_feature'])
            ->withPivot(['is_feature']);
    }

    public function getFirstFeaturedMedia()
    {
        return $this->featuredMedia->first();
    }

    public function mobileMedia()
    {
        return $this->hasMany(MobileMedia::class, 'mobile_id', 'id');
    }

    public function mediaImages()
    {
        return $this->hasManyThrough(Media::class, MobileMedia::class, 'mobile_id', 'id', 'id', 'media_id');
    }
    
    public function memory()
    {
        return $this->hasOne(MobileMemory::class, 'mobile_id');
    }

    public function camera()
    {
        return $this->hasOne(MobileCam::class, 'mobile_id');
    }

    public function general()
    {
        return $this->hasOne(MobileGeneralInfo::class, 'mobile_id');
    }

    public function body()
    {
        return $this->hasOne(MobileBody::class, 'mobile_id');
    }

    public function network()
    {
        return $this->hasOne(MobileNetwork::class, 'mobile_id');
    }

    public function battery()
    {
        return $this->hasOne(MobileBattery::class, 'mobile_id');
    }

    public function youtube()
    {
        return $this->hasOne(YoutubeVideos::class, 'mobile_id');
    }


    // public function mediaImages()
    // {
    //     return $this->hasMany(MobileMedia::class, 'mobile_id', 'id')->with('media');
    // }



   
}
