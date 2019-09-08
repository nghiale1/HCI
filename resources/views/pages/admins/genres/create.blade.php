@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('genre.create.submit',['category'=>$category])}}" method="POST">
            @csrf
                    <h4>Hạng mục sách</h4>
                    <input type="text" name="category_id" id="category_id" value="{{$category->category_name}}" disabled/>
                    <h4>Thể loại nghệ thuật</h4>
                    <input type="text"  name="genre_name" id="genre_name">
                    <br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('genre.index')}}" class="btn btn-default">Back</a>
                

                
        </form>
    </div> 

</div>

@endsection