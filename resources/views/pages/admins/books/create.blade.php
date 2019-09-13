@extends('layouts.admin')

@section('content')
@section('customcss')
<style>

button, input, select, textarea {
    width: 100%;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin-bottom: 5px;
    padding: 2px;
}
#book_title{
    padding: 5px;

}
</style>
    
@endsection

<div id="page-wrapper">
    <div class="container-fluid">
        <form data-toggle="validator" novalidate="true" action="{{route('book.create.submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-10">
                                <input type="text"  name="book_title" id="book_title" placeholder=" Tên sách"><br><br>
                                <textarea name="book_description" class="form-control " id="book_description"></textarea>
                </div>
            
                <div class="col-sm-2">
                    
                        
                                    <div>Giá</div>
                                    <input type="number"  name="book_price" id="book_price" placeholder=" VNĐ">
                                    <div>Giá khuyến mãi</div>
                                    <input type="number"  name="sale_price" id="sale_price" placeholder=" VNĐ">
                                    <div>Ngày phát hành</div>
                                    <input type="text"  name="book_releasedate" id="book_releasedate" >
                                    <div>Hình thức</div>
                                    <input type="text"  name="book_form" id="book_form" >
                                    <div>Số trang</div>
                                    <input type="number"  name="book_pagenumber" id="book_pagenumber" >
                                    <div>Kích thước</div>
                                    <input type="text"  name="book_size" id="book_size" placeholder=" cm">
                                    <div>Trọng lượng</div>
                                    <input type="text"  name="book_weight" id="book_weight" placeholder=" gram">
                                    <div>Tác giả</div>
                                    <select name="author_id"   stype="padding:4px; width:100%">
                                        @foreach($author as $a)
                                            <option value="{{$a->author_id}}">{{$a->author_name}}</option>
                                        @endforeach
                                    </select>
                                    <div>Dịch giả</div>
                                    <select name="tranlator_id"   stype="padding:4px; width:100%">
                                            <option value="" selected>Không có</option>
                                        @foreach($tranlator as $tran)
                                            <option value="{{$tran->tranlator_id}}">{{$tran->tranlator_name}}</option>
                                        @endforeach
                                                
                                    </select>
                                    <div>Nhà xuất bản</div>
                                    <select name="publishing_house_id"   stype="padding:4px; width:100%">
                                            @foreach($publishing_house as $pub)
                                                <option value="{{$pub->publishing_house_id}}">{{$pub->publishing_house_name}}</option>
                                            @endforeach
                                    </select>                
                                    <div>Nhà phát hành</div>
                                    <select name="book_company_id"   stype="padding:4px; width:100%">
                                            @foreach($book_company as $company)
                                                <option value="{{$company->book_company_id}}">{{$company->book_company_name}}</option>
                                            @endforeach
                                    </select>      
                                              
                             
                    </div>
                    
             
            {{-- <div class="form-group col-md-12"> --}}
                
                
                {{-- </div> --}}
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div> 
                
                </div><a href="{{route('book.index')}}" class="btn btn-default">Back</a>
            </div>
               
        {{-- </form> --}}
    </div> 

</div>

@endsection