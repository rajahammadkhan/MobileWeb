<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileGeneralInfo extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_general_info';
    protected $fillable = [
        'mobile_id',
        'res_width',
        'res_height',
        'res_ppi',
        'size',
        'release_date',
        'os',
        'ui',
        'audio',
        'torch',
        'browser',
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
