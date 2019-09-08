<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PublishingHouse;

class PublishingHouseController extends Controller
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
            'model' => new PublishingHouse(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_index($this->request);

        return view('pages.admins.publishinghouses.index', ['data' => $data]);
    }

    // TODO: Mỗi function chỉ thực hiện 1 nhiệm vụ. Cho người khác dễ sửa chửa code của mình.

    // Hàm chỉ thực hiện chức năng Thêm thông qua Method = POST
    public function create_submit(Request $request)
    {
        $config = [
            'model' => new PublishingHouse(),
            'request' => $request,
        ];
        $this->config($config);
        $data = $this->model->web_insert($this->request);
        // dd($data);
        return redirect('publishinghouse/')->with('success', 'Added Successfully');
    }

    public function edit($publishing_house_id)
    {
        $publishing_house = PublishingHouse::findOrFail($publishing_house_id);

        return view('pages.admins.publishinghouses.edit', compact('publishing_house', 'publishing_house_id'));
    }

    public function update(Request $request, $publishing_house)
    {
        $publishing_house = PublishingHouse::find($publishing_house_id);
        //TODO:  Nhan du lieu tu form cu
        $publishing_house->publishing_house_name = $request->get('publishing_house_name');
        $publishing_house->save();
        // dd($academy);
        return redirect('publishinghouse')->with('success', 'Updated Successfully');
    }

    public function destroy($publishing_house_id)
    {
        $data = PublishingHouse::findOrFail($publishing_house_id);
        $data->delete();
        // dd($data);
        return redirect('publishinghouse')->with('success', 'Deleted Successfully!');
    }
}
