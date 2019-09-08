@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <h3 class="box-title">Book Company Table</h3>
                <br>
                <form data-toggle="validator" novalidate="true" action="{{route('bookcompany.create.submit')}}" method="POST">
                    @csrf
        
                        @csrf
                            <h4>Thêm nhà phát hành</h4>
                            <input type="text" name="book_company_name" id="book_company_name" />

                            <button class="btn btn-success" type="submit">Submit</button>
                        
        
                        
                </form>
                <br>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table color-table primary-table">
                        <thead>
                            <tr>
                                <th>Tên nhà phát hành:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item['book_company_name']}}</td>
                                    <td>
                                        <form action="{{ route('bookcompany.destroy', $item->book_company_id) }}" method="post" class="delete_form">
                                            <a href="{{ action('Master\BookCompanyController@edit',$item->book_company_id) }}" class="btn btn-warning">Edit</a>
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
