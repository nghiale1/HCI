<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Base\BaseModel;

class WarehouseBook extends BaseModel
{
    protected $table = 'warehouse_books';  //tên bảng

    protected $primaryKey = 'warehouse_book_id'; //khóa chính

    protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'warehouse_book_id',
        'book_id',
        'warehouse_id',
        'warehouse_book_amount',
        'warehouse_book_remaining_amount',
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
            'warehouse_book_id' => 1,
        ];

        return parent::base_update($this->request);
    }
}
