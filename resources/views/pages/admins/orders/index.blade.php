@extends('layouts.admin')
@section('content')
<style>
    a.btn.btn-warning {
        /* width: 62px; */
    }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
                <h3 class="box-title">Trang Kiểm duyệt đơn hàng</h3>
                <br>
                {{-- <a href="{{route('book.create')}}" class="btn btn-success waves-effect waves-light m-r-10">Tạo mã</a> --}}
                <input type="submit" value="Tìm kiếm" style="float:right">
                <input type="search" style="float:right;width:20%">
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table" id='book_table'>
                        <thead>
                            <tr>
                                <th>STT:</th>
                                <th>Mã đơn:</th>
                                <th>Người đặt:</th>
                                <th>Ngày đặt:</th>
                                <th>Sản phẩm:</th>
                                <th>Tổng tiền:</th>
                                <th>Phí vận chuyển:</th>
                                <th>Giảm giá:</th>
                                <th>Còn lại:</th>
                                <th>Ghi chú:</th>
                                <th>Tác vụ:</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                        <td>1</td>
                                        <td>S01</td>
                                        <td>Lê Minh Nghĩa</td>
                                        <td>10/10/2019</td>
                                        <td>Nhà giả kim và 1 sản phẩm khác</td>
                                        <td>106,880đ</td>
                                        <td>20,000đ</td>
                                        <td>0đ</td>
                                        <td>126,880đ</td>
                                        <td></td>
    
                                        <td>
                                            <form  method="post" class="delete_form">
                                                <a  class="btn btn-success">Duyệt</a>
                                                <a  class="btn btn-warning">Chi tiết</a>
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hủy</button>
                                            </form>
                                        </td>
                                    </tr>
                            {{-- @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['book_id']}}</td>
                                    <td>{{$item['book_title']}}</td>
                                    <td>{{$item['book_price']}}</td>
                                    <td>{{$item->sales['sale_price']}}</td>
                                    <td>{{$item->authors['author_name']}}</td>
                                    <td>{{$item->tranlators['tranlator_name']}}</td>
                                    <td>{{$item->publishing_houses['publishing_house_name']}}</td>
                                    <td>{{$item->book_companies['book_company_name']}}</td>
                                    <td>{{$item['book_releasedate']}}</td>

                                    <td>
                                        <form action="{{ route('book.destroy', $item->book_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\BookController@edit',$item->book_id) }}" class="btn btn-warning">Sửa</a>
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
        </div>
        {{-- end div col-sm-6 --}}
    </div> 
    {{-- end div row --}}
</div>
{{-- end div container-fluid --}}

<script>
$(document).ready(function () {
        $('#book_table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            }); 
    });
</script>
@endsection
