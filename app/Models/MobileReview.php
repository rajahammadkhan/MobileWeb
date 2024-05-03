<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileReview extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_review';
    protected $fillable = [
        'mobile_id',
        'user_id',
        'tittle',
        'name',
        'email',
        'feedback',
        'star',
        'reviews_status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];

    public function mobile()
    {
        return $this->belongsTo('App\Models\Mobile');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
