<?php require_once '/../../php/guest_only_auth.php';

if (!isset($_SESSION)) session_start();
if (isset($_SESSION['register_errors'])) {
  echo '<div class="alert alert-danger text-center col-md-7 col-md-offset-2" role="alert">' . $_SESSION['register_errors'] . '</div>';
  unset($_SESSION['register_errors']);
}
?>
<form class="form-horizontal col-md-6 col-md-offset-2 form" method='post' action='../../php/register_user.php'>
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
  <div class="form-group">
    <label for="password_confirm" class="col-sm-4 control-label">Retype Password</label>
    <div class="col-sm-8">
      <input type="password" name='password_confirm' class="form-control" id="password_confirm" placeholder="Password Confirmation">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">Sign Up</button>
    </div>
  </div>
</form>