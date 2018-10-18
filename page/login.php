<!DOCTYPE html>
<html>
<head>
	<title>SSRS | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="../css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:100,300italic,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">

	<!-- Navbar -->
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
          <li><a href="../index.php#about">About</a></li>
          <li><a href="../index.php#portfolio">Our Product</a></li>
          <li><a href="../index.php#contact">Developers</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#Signup">Sign Up</a></li>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- from -->
  <div class="container">
  	<div class="row">
  		<div class="login-form"	>
	  		<form class="form-horizontal">
	    		<div class="form-group">
	      	  <label for="inputEmail" class="control-label col-xs-2">Email</label>
	        	<div class="col-xs-10">
	          	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
	        	</div>
	    		</div>
	    		<div class="form-group">
	        	<label for="inputPassword" class="control-label col-xs-2">Password</label>
	        	<div class="col-xs-10">
	          	<input type="password" class="form-control" id="inputPassword" placeholder="Password">
	        	</div>
	    		</div>
	    		<div class="form-group">
	        	<div class="col-xs-offset-2 col-xs-10">
	            <div class="checkbox">
	              <label><input type="checkbox"> Remember me</label>
	            </div>
	        	</div>
	    		</div>
	    		<div class="form-group">
	        	<div class="col-xs-offset-2 col-xs-10">
	            <button type="submit" class="btn btn-primary">Login</button>
	        	</div>
	    		</div>
				</form>
			</div>
  	</div>
  </div>


  <!-- footer -->
  <footer id='social-footer' class="login-footer">
        <ul>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Email" data-placement="top" href="#">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-envelope fa-stack-1x blacktext"></i>
                </a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Linkedin" data-placement="top" href="#" target="_blank"><i class="fa fa-linkedin-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Twitter" data-placement="top" href="#" target="_blank"><i class="fa fa-twitter-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="GitHub" data-placement="top" href="https://github.com/codersfield" target="_blank"><i class="fa fa-github-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Facebook" data-placement="top" href="#" target="_blank"><i class="fa fa-facebook-square fa-stack-2x"></i></a>
            </li>

            <li class='highlight'>
                <a class="fa-stack fa-1x" data-toggle="tooltip" title="Google+" data-placement="top" href="#" target="_blank"><i class="fa fa-google-plus-square fa-stack-2x"></i></a>
            </li>

        </ul>
      <br>
        <span>© 2018 All rights reserved</span>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='../js/wq.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script type="module" src="../js/style.js"></script>
</body>
</html>