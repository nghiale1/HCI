@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('author.create.submit')}}" method="POST">
            @csrf

                @csrf
                    <h4>Tên tác giả</h4>
                    <input type="text" name="author_name" id="author_name" />
                    <h4>Thông tin tác giả</h4>
                    <textarea type="text"  name="author_info" id="author_info"></textarea>
                    <br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('author.index')}}" class="btn btn-default">Back</a>
                

                
        </form>
    </div> 

</div>

@endsection