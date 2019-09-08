@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('category.create.submit',['type'=>$type])}}" method="POST">
            @csrf

                @csrf
                    <h4>Loại sách</h4>
                    <input type="text" name="type_id" id="type_id" value="{{$type->type_name}}"  readonly/>
                    <h4>Hạng mục sách</h4>
                    <input type="text"  name="category_name" id="category_name">
                    <br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('category.index')}}" class="btn btn-default">Back</a>
                

                
        </form>
    </div> 

</div>

@endsection