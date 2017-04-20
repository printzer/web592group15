<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}

.navbar-nav li a:hover {
    color: #1abc9c !important;
}
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
}

p {font-size: 16px;}
.margin {margin-bottom: 45px;}

</style>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">we</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">above we</a></li>
        <li><a href="#">product</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bg-1 text-center">
  <h3>welcome to  website  </h3>
  <img src="bird.jpg" class="img-responsive img-circle" style="display:inline" alt="Bird">
  <h3>We am TreeTree</h3>
</div>

<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum..</p>
   <div class="col-sm-2">
   <h5>สินค้าชนิด 1</h5>
  <hr>
  </div>
  <div class="col-sm-2">
  <h5>สินค้าชนิด 2</h5>
  <hr>
  </div>
  <div class="col-sm-2">
  <h5>สินค้าชนิด 3</h5>
  <hr>
  </div>
   <div class="col-sm-2">
   <h5>สินค้าชนิด 4</h5>
  <hr>
  </div>
  <div class="col-sm-2">
  <h5>สินค้าชนิด 5</h5>
  <hr>
  </div>
  <div class="col-sm-2">
  <h5>สินค้าชนิด 6</h5>
  <hr>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <h3>Where To Find Me?</h3>
  <p>Lorem ipsum..</p>
</div>
<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum..</p>
  <a href="#" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-search"></span>Search
</a>
</div>
<div class="container-fluid bg-3 text-center"> 
  <h3>Where To Find Me?</h3>
  <div class="row">
  <div class="col-sm-12">
  <hr>
  </div>
    <div class="col-sm-4">
      <p>Lorem ipsum..</p>
      <img src="birds1.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Lorem ipsum..</p>
<img src="birds2.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum..</p>
      <img src="birds3.jpg" alt="Image">
    </div>
  </div>
</div>
<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>
</body>
</html>