<?php
error_reporting(0);
session_start();
$id = $_SESSION['userId'];
?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login &amp; Register Templates</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">





        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="site.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>    

    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">Cover</h3>
                            <ul class="nav masthead-nav">
                                <li>
                                    <a href="http://localhost/playList_project/index.php">Home Page</a>
                                </li>
                                <li><a
                                    <?Php
                                    if ($id != '')
                                        echo 'href="API.php?command=logout">Log-Out</a>';
                                    else
                                        echo 'href="http://localhost/playList_project/login.php">Login</a>';
                                    ?>
                            </li>
                            <li class="active">
                                <a href="http://localhost/playList_project/registerPage.php">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">                   
                    <div class="col-sm-push-10">                       	
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up now</h3>
                                    <p>Fill in the form below to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">

                                <form role="form" action="API.php" method="post" class="registration-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="userName">User Name</label>
                                        <input type="text" name="userName" placeholder="User name..." class="form-username form-control" id="form-username" required oninvalid="this.setCustomValidity('User Name is required!')">
                                        
                                    </div>	
                                    <div class="form-group">
                                        <label class="sr-only" for="firstName">First name</label>
                                        <input type="text" name="firstName" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="lastName">Last name</label>
                                        <input type="text" name="lastName" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" oninvalid="this.setCustomValidity('password is required!')" required>
                                    </div>
                                    <button type="submit"  name="command" value="register"  class="btn" onclick="setCookie('showPlaylist.php')">Sign me up!</button>
                                </form>
                            </div>
                        </div>

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
            </div>
        </div>
    </div>
    <script src="site.js"></script>
</body>
</html>