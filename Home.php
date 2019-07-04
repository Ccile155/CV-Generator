<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/CV.css">
	<link rel="icon" href="Image/logoCV.ico" />
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-grun()yR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta http-equiv="X-UA-Compatible content=3IE-edge">
	<title>Home</title>
</head>

<body class="container">
	<header>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ NAV $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<?php 
include('Nav.html');
 ?> 

	</header>

		<div class="spacer row" id="templateDisplay">
			
				<div class="bd-example">
				  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
				      <div class="carousel-item active" data-interval="15000">
				        <img src="Image/CV1.png" class="d-block w-50" alt="CV1 Swiss">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>CV Swiss</h5>
				          <p class="comment">Sérieux et dynamique</p>
				        </div>
				      </div>
				      <div class="carousel-item" data-interval="15000">
				        <img src="Image/CV2.png" class="d-block w-50" alt="CV2 Serif">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>CV Serif</h5>
				          <p class="comment">Sobre et efficace</p>
				        </div>
				      </div>
				      <div class="carousel-item" data-interval="15000">
				        <img src="Image/CV3.png" class="d-block w-50" alt="CV3 Spearmint">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>CV Spearmint</h5>
				          <p class="comment">Vif et innovant</p>
				        </div>
				      </div>
				      <div class="carousel-item" data-interval="15000">
				        <img src="Image/CVKhoa1.png" class="d-block w-50" alt="CV de Khoa">
				        <div class="carousel-caption d-none d-md-block">
				          <h5>CV Creator</h5>
				          <p class="comment">Times New Roman</p>
				        </div>
				      </div>
				    </div>
				    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>

<!-- 	<img src="Image/CV1.png" alt="CV1 Swiss">
	<img src="Image/CV2.png" alt="CV2 Serif">
	<img src="Image/CV3.png"  alt="CV3 Spearmint"> -->
		</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ FOOTER $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<?php 
include('Footer.html');
 ?> 

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Javascript Ccile-->
<script type="text/javascript" src="CV.js"></script>

</body>
</html>