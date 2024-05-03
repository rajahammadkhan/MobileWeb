<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileBody extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_body';
    protected $fillable = [
        'mobile_id',
        'dim_width',
        'dim_height',
        'dim_wide',
        'weight',
        'colors',
        'no_of_sim',
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
