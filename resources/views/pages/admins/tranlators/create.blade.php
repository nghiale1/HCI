@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('tranlator.create.submit')}}" method="POST">
            @csrf

                @csrf
                    <h4>Tên dịch giả</h4>
                    <input type="text" name="tranlator_name" id="tranlator_name" />
                    <h4>Thông tin dịch giả</h4>
                    <textarea type="text"  name="tranlator_info" id="tranlator_info"></textarea>
                    <br>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="{{route('tranlator.index')}}" class="btn btn-default">Back</a>
                

                
        </form>
    </div> 

</div>

@endsection