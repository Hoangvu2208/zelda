
<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.head')
</head>
<body class="hold-transition login-page">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6 mr-auto ml-auto" style="color :red">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                  <li class="breadcrumb-item active">Author Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
       
        <section class="content">
          <div class="container-fluid">
            <a href="{{route('index')}}" class="btn btn-secondary">Back</a>
            <div class="row">
              <div class="col-md-3">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="/images/avatar.jpg"
                           alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">Vu Dinh Hoang</h3>
    
                    
    
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Followers</b> <a class="float-right"><i class="fas fa-eye-slash"></i></a>
                      </li>
                      <li class="list-group-item">
                        <b>Following</b> <a class="float-right"><i class="fas fa-eye-slash"></i></a>
                      </li>
                      <li class="list-group-item">
                        <b>Friends</b> <a class="float-right"><i class="far fa-smile-beam"></i></a>
                      </li>
                    </ul>
    
                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <!-- About Me Box -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
    
                    <p class="text-muted">
                      Freshman at</br> College of Business and Communication
                    </p>
                    <p class="text-muted">
                        Global Engineer Course
                      </p>
                      
    
                    <hr>
    
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    
                    <p class="text-muted">Yokokama, Kanagawa, Japan.</p>
    
                    <hr>
    
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    
                    <p class="text-muted">
                      <span class="tag tag-danger">UI Design,</span>
                      <span class="tag tag-success">Coding,</span>
                      <span class="tag tag-info">Javascript,</span>
                      <span class="tag tag-warning">PHP,</span>
                      <span class="tag tag-primary">Node.js</span>
                      <span class="tag tag-primary">...</span>
                    </p>
    
                    <hr>
    
                    <strong><i class="fas fa-heartbeat"></i> Hobbies</strong>
    
                    
                    <a href="https://drive.google.com/drive/folders/1p3j0trY1GB054Q8kE7N9mtYCmFWM6LgX?usp=sharing">
                        <p class="text-muted">Listening and Producing beats</p>
                    <p class="text-muted">Editing videos</p>
                    </a>
                    <p class="text-muted">Coding</p>
                    <p class="text-muted">Drawing</p>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Timeline</a></li>
                      
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/images/avatar.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Vu Dinh Hoang
                              </a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Shared publicly - 7:30 PM today</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            I have a presentation today <span> <i class="far fa-sad-cry"></i> </span>                           
                          </p>
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/images/coffee-black-pr.jpeg" alt="User Image">
                            <span class="username">
                              <a href="#">Somebody</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Sent you a message - 3 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Ahihi 
                          </p>
    
                          <form class="form-horizontal">
                            <div class="input-group input-group-sm mb-0">
                              <input class="form-control form-control-sm" placeholder="Response">
                              <div class="input-group-append">
                                <button type="submit" class="btn btn-danger">Send</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.post -->
    
                        <!-- Post -->
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/images/avatar.jpg" alt="User Image">
                            <span class="username">
                              <a href="#">Vu Dinh Hoang</a>
                              <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                            </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            I found some free pictures useful for my project <span><i class="far fa-grin-hearts"></i></span>
                          </p>
                          <div class="row mb-3">
                            <div class="col-sm-6">
                              <img class="img-fluid" src="/images/cat-1.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <div class="row">
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="/images/cat-2.jpg" alt="Photo">
                                  <img class="img-fluid" src="/images/cat-3.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <img class="img-fluid mb-3" src="/images/cat-4.jpg" alt="Photo">
                                  <img class="img-fluid" src="/images/cat-5.jpg" alt="Photo">
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
    
                          <p>
                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                              </a>
                            </span>
                          </p>
    
                          <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                      </div>
                      
    
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">

        <strong>
            Copyright &copy; 2022. All rights reserved.
        </strong>
        
            <p>
                <span style="color: red">
                    This is just a demo Website by ICT 21153 </br>
                    College of Business and Communication.
                </span>
            </p>

        
      </footer>
    
@include('admin.footer')

</body>
</html>
