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
                <h3 class="box-title">Lê Minh Nghĩa</h3>
                <br>
                {{-- <a href="{{route('book.create')}}" class="btn btn-success waves-effect waves-light m-r-10"></a> --}}
                <br><input type="submit" value="Tìm kiếm" style="float:right">
                <input type="search" style="float:right;width:20%">
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table" >
                        <tr>
                            <th>Mã thành viên:</th>
                            <th>Tên thành viên:</th>
                            <th>Ngày tạo:</th>
                            <th>Đơn hàng đã mua:</th>
                                <th>Sản phẩm đã mua:</th>
                                <th>Tổng tiền đã thanh toán:</th>
                                <th>Tác vụ:</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Lê Minh Nghĩa</td>
                            <td>01/09/2019</td>
                            <td>1</td>
                                        <td>2</td>
                                        <td>126,880</td>
                                        <td><button type="submit" class="btn btn-danger">Chặn</button></td>
                        </tr>
                    </table>
                    <hr>
                    <table class="table color-table primary-table" id='book_table'>
                        <thead>
                            <tr>
                                
                                <td style="font-weight:bold">Mã đơn:</td>
                                <td style="font-weight:bold">Ngày đặt:</td>
                                <td style="font-weight:bold">Sản phẩm:</td>
                                <td style="font-weight:bold">Tổng tiền:</td>
                                <td style="font-weight:bold">Phí vận chuyển:</td>
                                <td style="font-weight:bold">Giảm giá:</td>
                                <td style="font-weight:bold">Còn lại:</td>
                                <td style="font-weight:bold">Phương thức thanh toán:</td>
                                <td style="font-weight:bold">Trạng thái:</td>

                                </strong>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                <td>S01</td>  
                                <td>10/10/2019</td>        
                                <td>NHÀ GIẢ KIM (TÁI BẢN 2017)<br>
                                    Đắc Nhân Tâm (Khổ Lớn)
                                </td>
                                       <td>106,880đ</td> 
                                <td>20,000đ</td>
                                <td>0đ</td>
                                <td>126,880đ</td>
                                <td>Tiền mặt khi nhận hàng</td>
                                <td>Đã hoàn thành</td>
                                        <td>
                                            <form  method="post" class="delete_form">
                                                {{-- <a  class="btn btn-warning">Xem chi tiết</a> --}}
                                                @csrf
                                                
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
