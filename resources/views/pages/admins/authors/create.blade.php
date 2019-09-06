@extends('layouts.admin')

@section('content')
<div class="row">
    <form action="{{route('tac_gia/them/submit')}}" method="post">
        @csrf
            <h4>Tên khoa</h4>
            <input type="text" name="author_name" id="author_name" />
            <h4>Thông tin tác giả</h4>
            <input type="text"  name="author_info" id="author_info">
            <button class="btn btn-success" type="submit">Submit</button>
            <a href="{{route('tac_gia/index')}}" class="btn btn-default">Back</a>
        </form>
        
    </div>
@endsection