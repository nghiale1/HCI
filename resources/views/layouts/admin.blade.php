<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <div id="wrapper">
        @include('layouts.admin.main_header')
        @include('layouts.admin.main_sidebar')
        @include('layouts.admin.content_wrapper')

        @include('layouts.admin.control_sidebar')
        @include('layouts.admin.footer')
    </div>
    @include('layouts.admin.js')
    @include('layouts.admin.custom_js')
    @include('layouts.admin.script')
</body>
</html>
