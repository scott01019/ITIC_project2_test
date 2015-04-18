<?php require_once '/../../php/guest_only_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Photogram!</title>

        <!-- Bootstrap core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href='../../css/styles.css' rel='stylesheet'>

        <!-- Custom styles for this template -->
        <link href="../../css/navbar-fixed-top.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php require_once '/partials/nav_guest.php'; ?>
        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Welcome to Photogram!</h1>
                <p>The coolest place on the web to share images with your friends.</p>
                <p>Click "Sign Up!" below to see what all the fuss is about!</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="registration.php" role="button">Sign Up!</a>
                </p>
            </div>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>