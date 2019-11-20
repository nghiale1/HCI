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
        <form data-toggle="validator" novalidate="true" action="{{route('book.edit.submit',$book->book_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    {{-- <input type="file" accept="image/*" onchange="loadFile(event)">
                    <img id="output"/> --}}
                
                
                <div class="col-sm-10">
                <img id="image" alt="Chọn hình đại diện" src="{{asset($book->image_path)}}" width="100" height="100" />
                    
                    <input type="file" name="avatar" id="avatar" value="{{asset($book->image_path)}}"
                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                    

                    {{-- <div class="img"></div> --}}
                    @forelse($image as $img)
                    <img id="photos" alt="Chọn hình sản phẩm" src="{{asset($img->image_path)}}" width="100" height="100" />
                    @empty <br>
                    @endforelse
                    {{-- <img id="hinh" alt="your photo" width="100" height="100" /> --}}
                <input type="file" name="photos[]" id="photos[]" multiple 
                    onchange=show() >
                <input type="text"  name="book_title" id="book_title" placeholder=" Tên sách" value="{{$book->book_title}}"><br><br>
                    <textarea name="book_description" class="form-control " id="book_description" >{!!$book->book_description!!}</textarea>
                </div>
            
                <div class="col-sm-2">
                    <div>Giá</div>
                    <input type="number"  name="book_price" id="book_price" placeholder=" VNĐ" value="{{$book->book_price}}">
                    <div>Khuyến mãi (%)</div>
                    <input type="number"  name="sale_price" id="sale_price" placeholder=" %" value="{{$book->sale_price}}">
                    <div>Ngày phát hành</div>
                    <input type="text"  name="book_releasedate" id="book_releasedate" value="{{$book->book_releasedate}} %">
                    <div>Thể loại</div>
                    <select name="genre_id"   stype="padding:4px; width:100%" >
                        {{-- <option value="" selected disabled>-Chọn-</option> --}}
                        @foreach($genre as $gen)
                            <option value="{{$gen->genre_id}}" @if($gen->genre_id==$book->genre_id) selected @endif>{{$gen->genre_name}}</option>
                        @endforeach 
                    </select>
                    <div>Hình thức</div>
                    <input type="text"  name="book_form" id="book_form" value="{{$book->book_form}}">
                    <div>Số trang</div>
                    <input type="number"  name="book_pagenumber" id="book_pagenumber" value="{{$book->book_pagenumber}}">
                    <div>Kích thước</div>
                    <input type="text"  name="book_size" id="book_size" placeholder=" cm" value="{{$book->book_size}}">
                    <div>Trọng lượng</div>
                    <input type="text"  name="book_weight" id="book_weight" placeholder=" gram" value="{{$book->book_weight}}">
                    <div>Tác giả</div>
                    <input type="text"  name="author" id="author" value="{{$book->author_name}}">
                    <div>Dịch giả</div>
                    <input type="text"  name="tranlator" id="tranlator" value="{{$book->tranlator_name}}">
                    <div>Nhà xuất bản</div>
                    <select name="publishing_house_id"   stype="padding:4px; width:100%">
                            @foreach($publishing_house as $pub)
                                <option value="{{$pub->publishing_house_id}}" @if($pub->publishing_house_id==$book->publishing_house_id) selected @endif>{{$pub->publishing_house_name}}</option>
                            @endforeach
                    </select>                
                    <div>Nhà phát hành</div>
                    <select name="book_company_id"   stype="padding:4px; width:100%">
                            @foreach($book_company as $company)
                                <option value="{{$company->book_company_id}}"@if($company->book_company_id==$book->book_company_id) selected @endif>{{$company->book_company_name}}</option>
                            @endforeach
                    </select>      
                                              
                             
                </div>
                    
             
            <div class="form-group col-md-12">
                
                
                {{-- </div> --}}
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        
                    </div> 
                
                </div><a href="{{route('book.index')}}" class="btn btn-default">Trở lại</a>
            </div>
               
        {{-- </form> --}}
    </div> 

</div>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>

    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    
  </script>
  {{-- <script>
      $url = 'localhost:8000';
  CKEDITOR.replace( 'book_description2', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
  </script> --}}
{{-- <script>
        // var loadFile = function(event) {
        //     alert(123);
        //   var output = document.getElementById('photo');
        //   photo.src = URL.createObjectURL(event.target.files[0]);
        // };
      </script> --}}
      <script type="text/javascript">
          function show(){
            var arrLen=file.length;
            for (i=0 ; i < arrLen ; i++){
                // $('.img').append(img);
                // var img='<img id="photo" alt="your photo" width="100" height="100" />';
                // <img id="photo" alt="your photo" width="100" height="100" />
                document.getElementById('hinh').src = window.URL.createObjectURL(this.files[i]);
            }
            
            
          }
          
      </script>
      
@endsection