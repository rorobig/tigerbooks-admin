  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 900px;
      margin: auto;
      height: 428px;
  }
  </style>
</head>
<body>

<div class="container">
<h1> Welcome to TigerBooks!!</h1>
<h3>Order your favorite books here today</h3>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel"	data-slide-to="4"></li>
      <li data-target="#myCarousel"	data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/site/_.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/site/..jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="img/site/kort.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/site/romance2014.jpg" alt="Flower" width="460" height="345">
      </div>

     <div class="item">
        <img src="img/site/original-book-cover.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="img/site/Book-covers.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
      	<img src="img/site/darcys-of-pemberley-book-jacket-03.jpg" alt="cover" width="460" height="345">
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
</div>