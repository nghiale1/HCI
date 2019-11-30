@extends('layouts.admin')

@section('content')
<div id="page-wrapper">
    <div>
        <form data-toggle="validator" novalidate="true" method="POST">
            @csrf

                @csrf
                    <h4>Loại mã:</h4>
                    <select name="" id="" style="width:15%; padding:5px">
                        <option value="" >Giảm tiền</option>
                    </select>
                    <h4>Mã:</h4>
                    <input type="text" style="width:15%" name="tranlator_info" id="tranlator_info">&nbsp;&nbsp;&nbsp;<input type="button" value="Ngẫu nhiên">
                    
                    <h4>Số lượng:</h4>
                    <input type="number"style="width:15%">
                    <h4>Số tiền tối thiểu:</h4>
                    <input type="number"style="width:15%">
                    <h4>Tổng giảm:</h4>
                    <input type="number"style="width:15%">
                    <h4>Ghi chú:</h4>
                    <input type="number"style="width:15%">
                    <br><br>
                    <button class="btn btn-success" type="submit">Tạo</button>
                    <a class="btn btn-default">Trở lại</a>
                

                
        </form>
    </div> 

</div>

@endsection