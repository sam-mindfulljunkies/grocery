<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<div class="main-container container" style="margin-top: 10%">
  <div class="row">
      <div class="col-md-5 col-sm-12">
            <div class="login-form">
              <h3>Login Form</h3>
               <form method="POST" action="{{Route('userhome.login_check')}}">
                  @csrf
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="email" class="form-control" placeholder="User Name"autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <button type="submit" name="form_1" value="submit" class="btn btn-black">Login</button>
               </form>
            </div>
         </div>
            <div class="col-md-2"></div>
           <div class="col-md-5 col-sm-12">
            <div class="login-form">
              <h3>Registration</h3>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul type="square">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

               <form method="POST" action="{{Route('userhome.register')}}">
                  @csrf
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" class="form-control" placeholder="User Name"autocomplete="off">
                     @if($errors->has('email'))<span>{{'email'}}</span>@endif
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>user type</label>
                     <input type="text" name="user_type" class="form-control" placeholder="user_type" value="customer" readonly="">
                  </div>
                  <button type="submit" name="form_2" value="submit" class="btn btn-black">Register</button>
               </form>
            </div>
         </div>  
      </div>
</div>