

<!--HTML to register with bootstrap class the form redirect to user controller, check if the form if valid,
valid the inscription, then return to login where the user can login
------------------>
<div class="text-left">
    <a class="btn btn-primary btn-warning btn-block col-md-3" href="<?php echo site_url("user/")?>">Return to Login</a>
</div>

<div class="alert alert-danger">
    
<?php echo validation_errors(); ?>
</div>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
          <form method="post" accept-charset="utf-8" action="<?php echo site_url("user/confirmregistration")?>">

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" name="firstname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Username</label>
                <input class="form-control" name="username" type="text"  placeholder="Enter your username">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFbPseudo">Facebook Pseudo</label>
            <input class="form-control" name="fbpseudo" type="text" aria-describedby="nameHelp" placeholder="Enter your Facebook Pseudo">
          </div>
          <div class="form-group">
            <label for="exampleInputTel">PhoneNumber</label>
            <input class="form-control" name="phoneNumber" type="text" aria-describedby="nameHelp" placeholder="Enter your tel : 0678****">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" name="confirmpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="Inscription" /></div>
        </form>

  </div>
 </div>
</div>

