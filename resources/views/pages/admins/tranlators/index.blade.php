@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Tranlator Table</h3>
                <br>
                <a href="{{route('tranlator.create')}}" class="btn btn-success waves-effect waves-light m-r-10">Thêm dịch giả</a>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Tên dịch giả:</th>
                                <th>Thông tin dịch giả:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['tranlator_name']}}</td>
                                    <td>{{$item['tranlator_info']}}</td>
                                    <td>
                                        <form action="{{ route('tranlator.destroy', $item->tranlator_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\TranlatorController@edit',$item->tranlator_id) }}" class="btn btn-warning">Edit</a>
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
