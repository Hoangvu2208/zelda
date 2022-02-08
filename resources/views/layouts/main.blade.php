
@include('layouts.header')
@include('layouts.nav')
 <div class="container-fluid pt-5">
     
    <div class="row pb-3">
        <div class="col-12 pb-1">
            @include('admin.alert')
    @yield('content')
        </div>
    </div>
</div>


   @include('layouts.footer')

