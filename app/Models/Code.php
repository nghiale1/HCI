<?php

namespace App\Models;

use App\Models\Base\BaseModel;

class Code extends BaseModel
{
    protected $table = 'codes';  //tên bảng

    // protected $primaryKey = 'code_id'; //khóa chính

    // protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'code_id',
        'code_code',
        'code_description',
        'code_value',
        'code_condition',
        'code_amount',
        'code_remaining_amount',
        'status_id',
    ];
    public $timestamps = false;
}
