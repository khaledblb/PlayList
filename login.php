<!DOCTYPE html>
<html>
    <head>   
        <meta charset="utf-8">
        <script src="site.js"></script>
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
                                <li  class="active">
                                    <a href="http://localhost/playList_project/login.php">Login</a>
                                </li>
                                <li>
                                    <a href="http://localhost/playList_project/register.php">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-push-10">

                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="API.php" method="post" class="login-form"><h4>Welcome back.</h4>
                                        <div class="form-group">
                                            <label class="sr-only" for="userName">Username</label>
                                            <input type="text" name="userName" placeholder="Username..." class="form-username form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="userPassword">
                                        </div>
<!--                                             <input name="command" value="login" type="submit" class="btn btn-info"/>
                             <button type="submit" class="btn">Sign in!</button>-->
                                        <button type="submit" name="command" value="login"  class="btn" onclick="setCookie('showPlaylist.php')">Log in!</button>
                                    </form>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>


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

        <script src="site.js" type="text/javascript"></script>
    </body>
</html>
