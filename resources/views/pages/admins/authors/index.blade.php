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
                <h3 class="box-title">Trang tác giả</h3>
                <br>
                <a href="{{route('author.create')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm tác giả</a>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Tên tác giả:</th>
                                <th>Thông tin tác giả:</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['author_name']}}</td>
                                    <td>{{substr($item['author_info'],0,500)}}</td>
                                    <td>
                                        <form action="{{ route('author.destroy', $item->author_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\AuthorController@edit',$item->author_id) }}" class="btn btn-warning">Sửa</a>
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {{-- end div col-sm-6 --}}
    </div> 
    {{-- end div row --}}
</div>
{{-- end div container-fluid --}}
@endsection
