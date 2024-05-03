<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MobileMemory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'mobile_memory_info';
    protected $fillable = [
        'mobile_id',
        'card_supported',
        'supported_card_size',
        'ram_1',
        'ram_2',
        'built_in_memory_1',
        'built_in_memory_2',
        'process_size_id',
        'no_of_process',
        'processor_type_id',
        'process_text',
        'chipset',
        'gpu',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected $dates = ['deleted_at'];
}
