@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('bookcompany.create.submit')}}" method="POST">
            @csrf

                @csrf
                    <h4>Tên nhà phát hành</h4>
                    <input type="text" name="book_company_name" id="book_company_name" />
                    <br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('bookcompany.index')}}" class="btn btn-default">Back</a>
                

                
        </form>
    </div> 

</div>

@endsection