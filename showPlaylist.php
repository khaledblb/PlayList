<?php
error_reporting(0);
session_start();
$id = $_SESSION['userId'];
if ($id == '') {
    echo 'ID=' . $id;
    header('Location: login.php');
}
?>


<html>
    <head>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    </head>
    <body onload="checkUser()">
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <form role="form" action="API.php" method="post" class="login-form">  
                        <div class="masthead clearfix">
                            <div class="inner">
                                <h3 class="masthead-brand">Hello Again <br><?php
                                    echo $_SESSION['firstName'];
                                    ?></h3>
                                <ul class="nav masthead-nav">
                                    <li class="active">
                                        <a href="http://localhost/playList_project/index.php">Home Page</a>
                                    </li>
                                    <li><a
                                        <?Php
                                        $id = $_SESSION['userId'];
                                        if ($id != '')
                                            echo 'href="API.php?command=logout">Log-Out</a>';
                                        else
                                            echo 'href="http://localhost/playList_project/login.php">Login</a>';
                                        ?>
                                </li>
                                <li>

                                    <?Php
                                    $id = $_SESSION['userId'];
                                    if ($id == '')
                                        echo '<a http://localhost/playList_project/register.php">Register</a>';
                                    ?>

                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="inner cover">
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="serchTerm" placeholder="search-text" id="search-box">
                            </div>
                        
                        <form action="API.php" method="post" width="400px" height="400px"></form>
                            <button name="command" value="navigate" onclick="setCookie('upload.php')" class="btn-sm-blue">Upload</button>
                            <div id="table-wrapper">
                                <div id="table-scroll">
                                    <table id="moviesTable" class="table table-sm table-inverse"></table>
                                </div>
                            </div>
                            <hr>
                            <input type="hidden" name="userId" id="userId" value="
                            <?php
                            if (!isset($_SESSION))
                                session_start();
                            echo $_SESSION['userId'];
                            ?>"/>
                        
                        <div id="editDiv"></div>
                        </div>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <!-- Validation -->
                            <p><a href=
                                  "http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fg6GWQ"
                                  target="_blank"><small>HTML ,CSS ,JS ,BOOTSTRAP</small></a></p>
                            <p><a href=
                                  "https://github.com/twbs/bootlint"
                                  target="_blank"><small>Checked with Bootlint</small></a></p>
                            <p> ~ © 2018 Blbesie   Khaled ~ </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="site.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</html>