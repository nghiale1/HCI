@extends('layouts.admin')
@section('content')


<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" action="{{route('book.create.submit')}}" method="POST">
            @csrf

            <div class="form-group col-md-12">
                <label>Content</label>
                <textarea name="txtContent" class="form-control " id="editor1"></textarea>
            </div> 


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('book.index')}}" class="btn btn-default">Back</a>
                </div>

                
        </form>
    </div> 

</div>

@endsection