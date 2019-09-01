<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Base\BaseModel;

class User extends BaseModel
{
    protected $table = 'users';  //tên bảng

    protected $primaryKey = 'user_id'; //khóa chính

    protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'user_id',
        'user_name',
        'user_username',
        'user_password',
        'user_tel',
        'user_mail',
        'user_birth',
        'user_gender',
        'permission_id'.
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
            'user_id' => 1,
        ];

        return parent::base_update($this->request);
    }
}
