<?php
session_start();
    $id = $_SESSION['userId'];
    if($id==''){
        header('Location: login.php');      
    }
    ?>
<html>
    <head>     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="site.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="jquery-3.2.1.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    </head>
    
    <body>
 <div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <ul class="nav masthead-nav">
            <li class="active">
              <a href="http://localhost/playList_project/index.php">Home Page</a>
            </li>
            <li>
              <a href="API.php?command=logout">Log-Out</a>
            </li>
            <li>
              <a href="http://localhost/playList_project/register.php">Register</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="inner cover">
        <div class="form-group">
<iframe width="720" height="315" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
        src="<?php if(isset($_COOKIE['url'])){
         $url = $_COOKIE['url'];
         echo $url;
     }?>" ></iframe>
            
            
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
