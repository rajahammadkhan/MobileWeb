<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ProcessorSize extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'processor_sizes';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
