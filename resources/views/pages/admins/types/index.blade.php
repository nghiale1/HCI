@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Type Table</h3>
                <br>
                <form data-toggle="validator" novalidate="true" action="{{route('type.create.submit')}}" method="POST">
                    @csrf
        
                        @csrf
                            <h4>Thêm loại sách</h4>
                            <input type="text" name="type_name" id="type_name" />

                            <button class="btn btn-success" type="submit">Submit</button>
                </form>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Loại sách:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['type_name']}}</td>
                                    <td>
                                        <form action="{{ route('type.destroy', $item->type_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\CategoryController@add_render',$item->type_id) }}" class="btn btn-success">Add Category</a>
                                            <a href="{{ action('Master\BookCompanyController@edit',$item->type_id) }}" class="btn btn-warning">Edit</a>
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
