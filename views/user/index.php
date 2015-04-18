<?php require_once '/../../php/user_only_auth.php'; ?>

<?php
    require_once '/../../php/get_img.php';
    require_once '/../../php/functions.php';
    if (!isset($_SESSION)) session_start();
    $username = $_SESSION['username'];
    $profile_img = '../../resources/images/profiles/' . get_profile_img($db, $_SESSION['username']);
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
                            <div class="user-container">
                                <div class="thumbnail">
                                    <img class="view-users-img" src=<?= $profile_img ?> alt="...">
                                    <h3 class="text-center"><?= $username ?></h3>
                                </div>
                            </div>
                        </header>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>