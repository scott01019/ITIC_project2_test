<?php require_once '/../../php/guest_only_auth.php';

if (!isset($_SESSION)) session_start();
if (isset($_SESSION['login_errors'])) {
  echo '<div class="alert alert-danger text-center col-md-5 col-md-offset-3" role="alert">' . $_SESSION['login_errors'] . '</div>';
  unset($_SESSION['login_errors']);
}
?>
<form class="form-horizontal col-md-6 col-md-offset-2 form" method='post' action='../../php/login_user.php'>
  <div class="form-group">
    <label for="username" class="col-sm-4 control-label">Username</label>
    <div class="col-sm-8">
      <input type="text" name='username' class="form-control" id="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-8">
      <input type="password" name='password' class="form-control" id="password" placeholder="Password">
    </div>
  </div>
<!--   <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>