
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>OSRMS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        max-height: calc(100%);
        max-width: calc(100%);
        justify-content: center;
        align-items: center;
        background: linear-gradient(200deg, #687EFF, #80B3FF, #98E4FF, #B6FFFA);
      }
      .login-form {
        display: block;
        position: center;
        border-radius: 50px;
        padding: 20px;
        padding-top: 50px;
        max-width: 500px;
        background-color: white;
        margin-top: -130px;
        box-shadow: 0 0 20px #6499E9;
     } 
      .erlert{
        display:block;
        border-radius:5px;
        background-color:rgba(230, 103, 42, 0.37);
        padding: 5px;
      }
      img{
        padding-bottom: 50px;
        height: 600px;
        max-width: 300px;
        object-fit: contain;
      }
      
      @media (min-width: 40em) {
        button{
          margin-left: -630px;
        }   
        h1{
          font-size: 32px;
        }
        
      }

      @media (max-width: 40em) {
        label{
          display: none;
        }
        .login-form{
          padding-top: 20px;
          margin-top: 
        }
        img{
          margin-top: -20px;
        }
        h1{
          font-size: 26px;
        }

      }




    </style>
  </head>
<body style="background-color: white">
  

<div class="container-fluid">
<center><img src="images/Logo.png"</center>
  <div class="login-form" id="login_modal" role="dialog" >
<center><h1>PHILIPPINE COLLEGE OF NOTHWESTERN LUZON</h1></center><br>

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">Username:</label>
      <div class="col-md-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" id="user" name="user" placeholder="Enter Username" autocomplete="off">
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-md-10">
      <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password">
      </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-9  col-md-12">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
        <button type="hidden"  class="btn btn-success" style="padding: 7px 135px 7px 133px; margin-bottom: 10px" >Login</button><br>
       
        <?php
  include 'connect.php';
  ?>
       
       
      </div>
   </div>        
</div>
<br>
<br>
<a href="Signup.php" style="color: #053B50; font-size: 16px;">Signup</a>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
