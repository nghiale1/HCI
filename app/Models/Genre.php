<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Base\BaseModel;

class Genre extends BaseModel
{
    protected $table = 'genres';  //tên bảng

    protected $primaryKey = 'genre_id'; //khóa chính

    protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'genre_id',
        'genre_name',
        'category_id',
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
            'genre_id' => 1,
        ];

        return parent::base_update($this->request);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function types()
    {
        return $this->hasManyThrough(Genre::class, Category::class, 'type_id', 'category_id', 'type_id', 'type_id');
    }
}
