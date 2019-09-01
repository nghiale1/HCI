<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Base\BaseModel;

class Code extends BaseModel
{
    protected $table = 'codes';  //tên bảng

    protected $primaryKey = 'code_id'; //khóa chính

    protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'code_id',
        'code_code',
        'code_description',
        'code_value',
        'code_condition',
        'code_amount',
        'code_remaining_amount',
        'status_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = true;

    // Không tùy tuyện thêm các trường cấu hình khác

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->fillable_list = $this->fillable;         // trường fillable sẽ truyền vào biến fillable_list
    }

    public function base_update(Request $request)
    {
        // $filter_param = $request->only($this->$fillable);
        $this->update_conditions = [
            'code_id' => 1,
        ];

        return parent::base_update($this->request);
    }
}
