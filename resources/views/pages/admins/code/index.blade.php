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
                <h3 class="box-title">Trang quản lý mã giảm giá</h3>
                <br>
                <a href="{{route('book.create')}}" class="btn btn-success waves-effect waves-light m-r-10">Tạo mã</a>
                <input type="submit" value="Tìm kiếm" style="float:right">
                <input type="search" style="float:right;width:20%">
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table" id='book_table'>
                        <thead>
                            <tr>
                                <th>Loại mã:</th>
                                <th>Mã:</th>
                                <th>Số lượng:</th>
                                <th>Số lượng còn lại:</th>
                                <th>Tác vụ:</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                        <td>Giảm tiền</td>
                                        <td>DiemA</td>
                                        <td>10</td>
                                        <td>10</td>
    
                                        <td>
                                            <form  method="post" class="delete_form">
                                                <a  class="btn btn-warning">Sửa</a>
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Dừng</button>
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
