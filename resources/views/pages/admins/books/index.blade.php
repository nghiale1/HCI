@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Academy Table</h3>
                <br>
                <a href="{{route('khoa-vien/them')}}" class="btn btn-success waves-effect waves-light m-r-10">Add</a>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Academy ID:</th>
                                <th>Academy Code:</th>
                                <th>Academy Name:</th>
                                <th>Academy Description:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['academy_id']}}</td>
                                    <td>{{$item['academy_code']}}</td>
                                    <td>{{$item['academy_name']}}</td>
                                    <td>{{$item['academy_description']}}</td>
                                    <td>
                                        <form action="{{ route('khoa-vien/destroy', $item->academy_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\AcademyController@edit',$item->academy_id) }}" class="btn btn-warning">Edit</a>
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
