@include('layouts.header')
<div class="container px-6 mx-auto">
  <div class="row">
    <div class="col-12">
      <div class="card-header" style="text-align: center"><h2>Register Page</h2></div>
    </div>
  </div>
  <div class="card-body">
      <p class="login-box-msg"><b>Please enter your information</b></p>
      @include('admin.alert')
        <!-- Form register  --> 
      <form action="{{route('user.register')}}" method="post">
          <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Your name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
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
        <div class="input-group mb-3">
          <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-check"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>
      <p class="mb-1">
        <a href="{{route('user.login')}}"><b>I had an account!</b></a>
      </p>
    </div>
    <!-- /.card-body -->
</div>

@include('layouts.footer')