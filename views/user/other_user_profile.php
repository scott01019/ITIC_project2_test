<?php require_once '/../../php/user_only_auth.php'; ?>

<?php
    require_once '/../../php/get_img.php';
    require_once '/../../php/functions.php';
    $user_head = '<div class="user-container" style="margin-left: 0;"><div class="thumbnail">';
    $user_head .= '<img class="view-users-img" src="../../resources/images/profiles/';
    $user_head .= get_profile_img($db, $_GET['user']) . '" alt="...">';
    $user_head .= '<h3 class="text-center">';
    $user_head .= $_GET['user'] . '</h3></div></div>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once '../partials/head.php'; ?>
    </head>

    <body>
        <?php require_once '/partials/nav_user.php'; ?>
        <div class="container">
            <header class='user-header col-md-8 col-md-offset-2'>
                <?= $user_head ?>
            </header>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>
