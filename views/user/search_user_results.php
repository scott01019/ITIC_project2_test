<?php require_once '/../../php/user_only_auth.php'; ?>

<?php
    require_once '/../../php/search_user.php';
    require_once '/../../php/db_connect.php';
    require_once '/../../php/get_img.php';

    $results = searchUser($db);
    $user_search_results = array();
    if (count($results)) {
        for ($i = 0; $i < 10; ++$i) {
            if (isset($results[$i])) {
                $user_result = '<a href="other_user_profile.php?user=' . $results[$i]; 
                $user_result .= '"><div class="user-container" style="margin-left: 0;"><div class="thumbnail">';
                $user_result .= '<img class="view-users-img" src="../../resources/images/profiles/';
                $user_result .= get_profile_img($db, $results[$i]) . '" alt="...">';
                $user_result .= '<div class="caption"><h3 class="text-center">';
                $user_result .= $results[$i] . '</h3></div></div></div>';
                array_push($user_search_results, $user_result);
            }
        }
    } else {
        $user_search_results = '<h3 class="text-center">No results found</h3>';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once '../partials/head.php'; ?>
    </head>
    <body>
        <?php require '/partials/nav_user.php'; ?>
        <div class="container">
            <div id='user-container'>
                <?php foreach($user_search_results as $user) echo $user; ?>
            </div>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>