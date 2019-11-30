@extends('layouts.admin')
@section('content')
<style>
    a.btn.btn-warning {
        width: 62px;
    }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Hạng mục sách</h3>
                <br>
                <br>
                <a href="{{route('category.create')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm hạng mục sách</a>

                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Hạng mục sách:</th>
                                <th>Loại sách:</th>
                                <th>Tác vụ:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['category_name']}}</td>
                                    <td>{{$item->types['type_name']}}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $item->category_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\GenreController@create_render',$item['category_id'] )}}" class="btn btn-success">Thêm mục con</a>
                                            <a href="{{ action('Master\CategoryController@edit',$item->category_id) }}" class="btn btn-warning">Sửa</a>
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
