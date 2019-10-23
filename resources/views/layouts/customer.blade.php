<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.customer.header')
<body>
    @include('layouts.customer.header_area')
    <hr>
    {{-- @include('layouts.customer.mobile_menu') --}}
    {{-- @include('layouts.customer.slider') --}}
    {{-- @include('layouts.customer.banner') --}}

    {{-- @include('layouts.customer.info') --}}
    {{-- @include('layouts.customer.featured') --}}
    @yield('content')
    {{-- @include('layouts.customer.testimonial') --}}
    {{-- @include('layouts.customer.counter') --}}

    {{-- @include('layouts.customer.blog') --}}

    {{-- @include('layouts.customer.news') --}}
    @include('layouts.customer.footer')
    @include('layouts.customer.js')
    @yield('custom_js')
</body>

</html>