<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Panunkart Head</title>

  	<!-- Bootstrap -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  </head>


<body>

  <div class="container-fluid">
    
    <!-- ************************************ HEADER **************************************** -->

    <div class="navbar navbar-inverse">
      <div class="container-fluid">

        <!-- Navigation Title -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#head">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="" class="navbar-brand">PANUNKART</a>
        </div>

        <div class="collapse navbar-collapse" id="head">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#head">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">CONTACT US</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" id="head">
            <li><a href="#head">LOGIN</a></li>
            <li><a href="">REGISTER</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ************************************ CAROUSEL **************************************** -->

  <div id="mycarousel" class="carousel slide" style="margin-left:28%; margin-right:28%; background:lightslategrey;">
    <ol class = "carousel-indicators">
        <li data-target = "#mycarousel" data-slide-to = "0" class="active"></li>
        <li data-target = "#mycarousel" data-slide-to = "1"></li>
        <li data-target = "#mycarousel" data-slide-to = "2"></li>
    </ol>
    <div  class="carousel-inner">

      <div class="item active">
        <img src="img/1.jpg" alt="image1" class="img-responsive">

      </div>

      <div class="item">
        <img src="img/2.jpg" alt="image1" class="img-responsive">

      </div>

      <div class="item">
        <img src="img/3.jpg" alt="image1" class="img-responsive">

      </div>
    </div>

    <a class="carousel-control left" href="#mycarousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="carousel-control right" href="#mycarousel" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

<!-- ************************************ CAROUSEL **************************************** -->

<div class="btn-group btn-group-justified" role="group">
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-toggle="dropdown" >Property Type <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="">Test 1</a></li>
            <li><a href="">Test 2</a></li>
            <li><a href="">Test 3</a></li>
          </ul>
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-toggle="dropdown">Budget <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="">Test 1</a></li>
            <li><a href="">Test 2</a></li>
            <li><a href="">Test 3</a></li>
          </ul>
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default" data-toggle="dropdown">Locality <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="">Test 1</a></li>
            <li><a href="">Test 2</a></li>
            <li><a href="">Test 3</a></li>
          </ul>
        </div>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default">LOOK UP!</button>
        </div>
      </div>

</div>







  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
