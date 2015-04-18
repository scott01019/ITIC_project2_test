<?php
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['upload_image_errors'])) {
  echo '<div class="alert alert-danger text-center col-md-7 col-md-offset-2" role="alert">' . $_SESSION['upload_image_errors'] . '</div>';
  unset($_SESSION['upload_image_errors']);
}
?>
<form action="../../php/upload_profile_images.php" method="post" enctype="multipart/form-data">
    <input type="file" name="profile_img" id="profile_img">
    <input type="submit" value="Upload Image" name="submit">
</form>