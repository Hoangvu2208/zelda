@include('layouts.header')
<div class="container px-6 mx-auto">
  <div class="row">
    <div class="col-12">
      <div class="card-header" style="text-align: center"><h2>Login Page</h2></div>
    </div>
  </div>
  <div class="row">
  <div class="card-body col-sm|md|lg|xl-12">
      <p class="login-box-msg"><b>Please enter your account</b></p>
      @include('admin.alert')
        <!-- Form login  --> 
      <form action="{{route('user.login')}}" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>
  
      <p class="mb-0">
        <a href="{{route('user.register')}}" class="text-center"><b>Register a new membership</b></a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
</div>

@include('layouts.footer')