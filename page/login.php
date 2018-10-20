<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>SSRS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</head>

<body class="loginBackImg">

    <head>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300italic,400,700,900' rel='stylesheet' type='text/css'>

   <title>SSRS</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">

  <nav id="nav-bar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        <a class="navbar-brand animated flip" href="#twoam">Student Service Request System</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Our Product</a></li>
          <li><a href="#contact">Developers</a></li>
          <li><a href="page/login.php">Login</a></li>
          <li><a href="page/signup.php">Sign Up</a></li>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="row container">
    <div class="col-md-5" style="background-image:'../assets/lstback.jpeg'">
</div>
  <div  align="left" class="form-group col-md-4"  style="background-color:#3B3B3B; border-radius:10px; border: 1px">


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2><font color="white">Please Login</font></h2>
     <div class="form-group">
    <br>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
     <div class="form-group">
      <input type="Password" class="form-control"  placeholder="Enter Password" name="pass">
      </div>
      <div class="form-group">
    <button type="submit"class="btn btn-Success">Login</button>&nbsp&nbsp&nbsp
       
    <font color="white"> Forgot password? </font><a href="#"><u>Click here</u></a>  </br> 

    </div>
    <div class="form-group">
    <hr>
    <font color="white">Don't have account </font><a href="sign.php"><u>Sign up here</u></a>
    </form>
    </div>
</div>




  </body>
  </html>
  