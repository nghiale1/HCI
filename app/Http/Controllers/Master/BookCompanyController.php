<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BookCompany;

class BookCompanyController extends Controller
{
    // Hàm khởi tạo.
    public function __construct()
    {
        parent::__construct();
    }

    // Hàm đỗ dữ liệu của một Khoa ra trang index
    public function index(Request $request)
    {
        $config = [
            'model' => new BookCompany(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.bookcompanies.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $config = [
            'model' => new BookCompany(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);
        // dd($data);
        return redirect('bookcompany/')->with('success', 'Added Successfully');
    }

    public function edit($book_company_id)
    {
        $book_company = BookCompany::findOrFail($book_company_id);

        return view('pages.admins.bookcompanies.edit', compact('book_company', 'book_company_id'));
    }

    public function update(Request $request, $book_company)
    {
        $author = BookCompany::find($book_company_id);
        //TODO:  Nhan du lieu tu form cu
        $book_company->book_company_name = $request->get('book_company_name');
        $book_company->save();
        // dd($academy);
        return redirect('bookcompany')->with('success', 'Updated Successfully');
    }

    public function destroy($book_company_id)
    {
        $data = BookCompany::findOrFail($book_company_id);
        $data->delete();
        // dd($data);
        return redirect('bookcompany')->with('success', 'Deleted Successfully!');
    }
}
