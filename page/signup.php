
<!-- <html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="form">
      
      <div class="tab-content">
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
            
                      <div class="field-wrap">
            <label>
              University Name<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Permanent Address<span class="req">*</span>
            </label>
            <input type="text "required autocomplete="off"/>
          </div>
            
                      <div class="field-wrap">
            <label>
              Contact NUmber<span class="req">*</span>
            </label>
            <input type="text "required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>SIGN UP</button>
          
          </form>

        </div>
        
      </div>
      
</div>
<script> -->
<!-- $(".form")
  .find("input, textarea")
  .on("keyup blur focus", function(e) {
    var $this = $(this),
      label = $this.prev("label");

    if (e.type === "keyup") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.addClass("active highlight");
      }
    } else if (e.type === "blur") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.removeClass("highlight");
      }
    } else if (e.type === "focus") {
      if ($this.val() === "") {
        label.removeClass("highlight");
      } else if ($this.val() !== "") {
        label.addClass("highlight");
      }
    }
  });

$(".tab a").on("click", function(e) {
  e.preventDefault();

  $(this)
    .parent()
    .addClass("active");
  $(this)
    .parent()
    .siblings()
    .removeClass("active");

  target = $(this).attr("href");

  $(".tab-content > div")
    .not(target)
    .hide();

  $(target).fadeIn(600);
});
 -->
<!-- </script> 
</body>
</html> -->

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
<div align="center">
  <span class="section-title portfolio">Sign Up</span>
</div>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="container">
    <div class="form-group">
      <label class="control-label col-ld-2" for="text">First Name:</label>
      <div class="col-ld-10">
        <input type="text" class="form-control" id="text" placeholder="Enter first name" name="txtfname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-ld-2" for="text">Last Name:</label>
      <div class="col-ld-10">
        <input type="text" class="form-control" id="text" placeholder="Enter last name" name="txtlname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-ld-2" for="email">Email:</label>
      <div class="col-ld-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="mail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-ld-2" for="pwd">Password:</label>
      <div class="col-ld-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-ld-2" for="pwd">Confirm Password:</label>
      <div class="col-ld-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter confirm password" name="cpass">
      </div>
    </div>
    <div class="row">
<div class="col-lg-6">
<label class="control-label col-ld-2" for="gender">Gender :</label>
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="gender" value="male" aria-label="..."> Male
      </span>
      <span class="input-group-addon">
        <input type="radio" name="gender" value="female" aria-label="..."> Female
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div><!-- /.row <--></-->
    <div class="row">
  <div class="col-lg-12">
  <label class="control-label col-ld-2" for="checkbox">Hobbies:</label>
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" name="chk" aria-label="..."> Reading
      </span>
      <span class="input-group-addon">
        <input type="checkbox" name="chk" aria-label="..."> Writing
      </span>
      <span class="input-group-addon">
        <input type="checkbox" name="chk" aria-label="..."> Singing
      </span> 
      <span class="input-group-addon">
        <input type="checkbox" name="chk" aria-label="..."> Dancing
      </span> 
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
  <div class="form-group">
  <label for="sel1">Degree:</label>
  <select class="form-control" name="deg" id="sel1">
    <option>Bsc. IT</option>
    <option>Computer Engineering</option>
    <option>Msc. IT</option>
    <option>B.Com</option>
  </select>
</div>
<div class="form-group">
  <label for="country">Country:</label>
  <select class="form-control" name="con" id="country">
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="United States">United States</option>
    <option value="India">India</option>
  </select>
</div>
<div class="row">
  <div class="form-group input-group-lg container" align="center">
      <button type="submit" name="btnsubmit" class="btn btn-success">Submit</button>
  </div>
  <div class="form-group input-group-lg container" align="center">
      <button type="reset" name="btnreset" class="btn btn-danger">Reset</button>
  </div>
</div>
</form>


</body>
</html>