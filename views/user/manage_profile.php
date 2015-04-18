<?php require_once '/../../php/user_only_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once '../partials/head.php'; ?>
    </head>

    <body>
        <?php require '/partials/nav_user.php'; ?>
        <div class="container">
        	<?php require '/partials/manage_profile_form.php'; ?>
        </div> <!-- /container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>