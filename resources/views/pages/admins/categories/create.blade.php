@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('category.create.submit')}}" method="POST">
            @csrf
                    <h4>Loại sách</h4>
                    <select name="type_id"  style="width:30%">
                            @foreach($type as $t)
                                <option value="{{$t->type_id}}">{{$t->type_name}}</option>
                            @endforeach
                    </select>
                    <h4>Hạng mục sách</h4>
                    <input type="text"  name="category_name" id="category_name">
                    <br><br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('category.index')}}" class="btn btn-default">Back</a>  
        </form>
    </div> 

</div>

@endsection