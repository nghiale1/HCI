@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Category Table</h3>
                <br>
                <br>
                <a href="{{route('category.create.view')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm hạng mục sách</a>

                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Hạng mục sách:</th>
                                <th>Loại sách:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['category_name']}}</td>
                                    <td>{{$item->types['type_name']}}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $item->category_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\GenreController@create_render',$item['category_id'] )}}" class="btn btn-warning">Create Genre</a>
                                            <a href="{{ action('Master\CategoryController@edit',$item->category_id) }}" class="btn btn-warning">Edit</a>
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
