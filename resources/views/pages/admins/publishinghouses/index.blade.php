@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Publishing House Table</h3>
                <br>
                <form data-toggle="validator" novalidate="true" action="{{route('publishinghouse.create.submit')}}" method="POST">
                    @csrf
        
                        @csrf
                            <h4>Thêm nhà xuất bản</h4>
                            <input type="text" name="publishing_house_name" id="publishing_house_name" />

                            <button class="btn btn-success" type="submit">Submit</button>
                        
        
                        
                </form>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Nhà xuất bản:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['publishing_house_name']}}</td>
                                    <td>
                                        <form action="{{ route('publishinghouse.destroy', $item->publishing_house_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\BookCompanyController@edit',$item->publishing_house_id) }}" class="btn btn-warning">Edit</a>
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
