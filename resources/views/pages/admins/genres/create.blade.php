@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('genre.create.submit')}}" method="POST">
            @csrf
                    <h4>Thể loại nghệ thuật</h4>
                    <input type="text"  name="genre_name" id="genre_name" style="width:30%">
                    <h4>Hạng mục sách</h4>
                    <select name="category_id"  style="width:30%">
                        @foreach($category as $c)
                            <option value="{{$c->category_id}}">{{$c->category_name}}</option>
                        @endforeach
                    </select>
                    
                    <br><br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('genre.index')}}" class="btn btn-default">Back</a>  
        </form>
    </div> 

</div>

@endsection