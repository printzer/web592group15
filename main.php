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
background: url(images.jpg);
	background-size:contain; /* Green */
    color: #333;
	
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
	
}
.bg-5 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
	margin-bottom:8px;
	
}
.bg-3 { 
    background-color: #EBEBEB; /* White */
    color: #555555;
	box-shadow: 4px 0 8px 0 rgba(0,0,0,0.8);
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
    letter-spacing: px;
	width:100%;	
    z-index:100;
	animation-delay:2;
	box-shadow: 4px 0 8px 0 rgba(0,0,0,0.8);
}


.navbar-nav li a:hover {.
    color: #1abc9c !important;
}
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    color: #000;
}

p {font-size: 16px;}
.margin {margin-bottom: 45px;}

.row{
	margin-left:5%;
	margin-right:5%;
}

.list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}

.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

/* Remove border and add padding to thumbnails */
.thumbnail {
    padding: 0 0 15px 0;
    border: none;
	border-radius:5%;
}

.thumbnail p {
    margin-top: 15px;
    color: #555;
}

/* Black buttons with extra padding and without rounded borders */
.btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}

/* On hover, the color of .btn will transition to white with black text */
.btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}
.carousel-inner img {
    -webkit-filter: grayscale(40%);
    filter: grayscale(40%); /* make all photos black and white */ 
    width: 100%;/* Set width to 100% */
    margin: auto;
	
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }

</style>
<body>                  
<nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="200">
  <div class="container">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">TreeTree</a>
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
  <img src="so1.png" width="280" height="250 class="img-responsive img-circle" style="display:inline" alt="Bird">
  <h3>We am TreeTree</h3>
  <h3>welcome to  website  </h3>
</div>

<div class="container-fluid bg-3 text-center">
  <h3>Where To Find Me?</h3>
  <p>Lorem ipsum..</p>
</div>

<div class="container-fluid bg-2 text-center">
   <div class="col-sm-2">
   <img src="closet.png" width="80" height="80"> 
   <h5>ตู้เสื้อผ้า</h5>
  </div>
  
  <div class="col-sm-2">
 <img src="bookshelf.png" width="80" height="80"> 
 <h5>ชั้นวางของ</h5>
  </div>
  
  <div class="col-sm-2">
   <img src="sofa.png" width="80" height="80"> 
   <h5>โซฟา</h5>
  </div>
  
   <div class="col-sm-2">
    <img src="desk.png" width="80" height="80"> 
    <h5>โต๊ะ</h5>
 
  </div>
  <div class="col-sm-2">
   <img src="television.png" width="80" height="80"> 
   <h5>ชั้นวางทีวี</h5>
  
  </div>
  <div class="col-sm-2">
   <img src="chair.png" width="80" height="80"> 
   <h5>เก้าอี้</h5>
  </div>
  
</div>  
  </div>
  
<div class="container-fluid bg-5 text-center" >
   <div class="col-sm-2">
    <img src="chair.png" width="80" height="80">
    <h5>โคมไฟ</h5> 
  </div>
  <div class="col-sm-2">
 <img src="chair.png" width="80" height="80">
 <h5>ห้องน้ำ</h5> 
  </div>
  <div class="col-sm-2">
   <img src="chair.png" width="80" height="80"> 
   <h5>ในสวน</h5>
  </div>
   <div class="col-sm-2">
    <img src="chair.png" width="80" height="80"> 
    <h5>ห้องครัว</h5>
  </div>
  <div class="col-sm-2">
  <img src="chair.png" width="80" height="80"> 
  <h5>ห้องนั่งเล่น</h5>
  </div>
  <div class="col-sm-2">
  <img src="chair.png" width="80" height="80"> 
  <h5>เบ็ดเตล็ด</h5>
  </div>
</div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="ban.jpg"alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>The atmosphere in New York is lorem ipsum.</p>
      </div> 
    </div>

    <div class="item">
      <img src="Gur07.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago - A night we won't forget.</p>
      </div> 
    </div>

    <div class="item">
      <img src="Guru.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>LA</h3>
        <p>Even though the traffic was a mess, we had the best time.</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container"  style="padding-top:10px"></div>
<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Lorem ipsum..</p>
  <a href="#" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-search"></span>Search
</a>
</div>
<div class="container-fluid bg-3 text-center"> 
  <h3>สินค้าแนะนำ</h3>
 <div class="row text-center" >
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="table1.jpg" alt="Paris">
      <p><strong>ชุดโต๊ะอาหาร 4 ที่นั่ง</strong></p>
      <p>ราคา 1990 บาท </p>
      <button class="btn ">ช้อปเลย</button>
	  
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="table2.jpg" alt="New York">
      <p><strong>เก้าอี้ไม้</strong></p>
      <p>ราคา 1,200 บาท</p>
      <button  class="btn">ช้อปเลย</button>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="table4.jpg" alt="San Francisco">
      <p><strong>ชุดโต๊ะกินข้าว 6 ที่นัง</strong></p>
      <p>ราคา 4,500 บาท</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
   <div class="col-sm-3">
    <div class="thumbnail">
      <img src="table5.jpg" alt="Paris">
      <p><strong>ชุดโต๊ะนั่งเล่น</strong></p>
      <p>ราคา 5,200</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
</div>
<div class="row text-center">
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="bed1.jpg" alt="Paris">
      <p><strong>เตียงนอน 6 ฟุต</strong></p>
      <p>ราคา 11,000</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="sofa1.jpg" 
      <p><strong>โซฟานั่งเล่น</strong></p>
      <p>ราคา 6,700 บาท</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="thumbnail">
      <img src="wardrobe.jpg" alt="San Francisco">
      <p><strong>ตู้เสื้อผ้า</strong></p>
      <p>ราคา 7,800  บาท</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
   <div class="col-sm-3">
    <div class="thumbnail">
      <img src="table7.jpg" alt="Paris">
      <p><strong>โต๊ะทำงาน</strong></p>
      <p>ราคา 8,990 บาท</p>
      <button class="btn">ช้อปเลย</button>
    </div>
  </div>
</div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
</footer>
</body>
</html>