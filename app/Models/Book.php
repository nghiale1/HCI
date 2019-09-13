<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Base\BaseModel;

class Book extends BaseModel
{
    protected $table = 'books';  //tên bảng

    protected $primaryKey = 'book_id'; //khóa chính

    protected $keyType = 'int'; // kiểu của khóa chính

    protected $fillable = [ // Chèn các trường ở đây
        'book_id',
        'book_title',
        'book_description',
        'book_price',
        'book_releasedate',
        'book_form',
        'book_pagenumber',
        'book_size',
        'book_weight',
        'tranlator_id',
        'author_id',
        'publishing_house_id',
        'book_company_id',
        'sale_id',
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
            'book_id' => 1,
        ];

        return parent::base_update($this->request);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }

    public function tranlators()
    {
        return $this->belongsTo(Tranlator::class, 'tranlator_id', 'tranlator_id');
    }

    public function publishing_houses()
    {
        return $this->belongsTo(PublishingHouse::class, 'publishing_house_id', 'publishing_house_id');
    }

    public function book_companies()
    {
        return $this->belongsTo(BookCompany::class, 'book_company_id', 'book_company_id');
    }

    public function sales()
    {
        return $this->hasOne(Sale::class, 'sale_id', 'sale_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_books', 'book_id', 'genre_id');
    }
}
