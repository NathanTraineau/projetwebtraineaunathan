

<!--HTML to login with bootstrap class------------------>
<div class="alert alert-danger">
    <?php  if (isset($data["error"])){
        echo $data["error"];
    }; ?>
</div>
<body class="bg-dark">
    <div class="alert alert-success" role="alert">
 Bien ouejjjj, 
 Là tu dois trouver comment rentrer sur ce site 
</div>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          <form method="post" accept-charset="utf-8" action="<?php echo site_url("user/validconnexion")?>">
          <div class="form-group">
            <label for="inputusername">Username</label>
            <input class="form-control" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <label for="inputpasword">Password</label>
            <input class="form-control" name="password" type="password" placeholder="Password" required>
          </div>
              <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="login" /></div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo site_url("user/test")?>">Register an Account</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
