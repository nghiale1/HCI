@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Author Table</h3>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['author_name']}}</td>
                                    <td>{{$item['author_info']}}</td>
                                    <td>
                                        <form action="{{ route('author.destroy', $item->author_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\AuthorController@edit',$item->author_id) }}" class="btn btn-warning">Edit</a>
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
