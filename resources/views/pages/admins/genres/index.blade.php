@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Genre Table</h3>
                <br>
                <br>
                <a href="{{route('genre.create.direct')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm thể loại nghệ thuật</a>

                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Thể loại nghệ thuật:</th>
                                <th>Hạng mục sách:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['genre_name']}}</td>
                                    <td>
                                        @foreach($item->categories as $t)
                                            {{$item->categories['category_name']}}
                                        @break
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('genre.destroy', $item->genre_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\GenreController@edit',$item->genre_id) }}" class="btn btn-warning">Edit</a>
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
