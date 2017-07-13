<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Спасибо за Вашу заявку</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
	body {
		font-family: 'Open Sans', sans-serif;
		height: 100vh;
		-webkit-background-size: cover;
		background-image: url(img/banner-success.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}
		body, html, .container, .row {
			overflow: hidden;
		}
		.main-menu {
			background-color: #fff;
			z-index: 1000;
			width: 100%;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		.main-menu .logo .bath-logo {
			float: left;
			width: 70px;
			height: 65px;
			background: url("img/logo.png");
			-webkit-background-size: 69%;
			background-size: 69%;
			background-repeat: no-repeat;
			margin-left: 125px;
		}
		.main-menu .logo p {
			font-size: 20px;
			width: 155px;
			display: inline-block;
			line-height: 20px;
			margin: 0;
			margin-top: 20px;
			margin-left: 10px;
		}
		.main-menu .callback {
			margin-top: 7px;
		}
		.main-menu .callback .phone-wrapper {
			width: 55px;
			height: 55px;
			background-color: #48799a;
			border-bottom-left-radius: 4px;
			border-top-left-radius: 4px;
			display: inline-block;
			float: left;
		}
		.main-menu .callback .phone {
			display: block;
			height: 25px;
			width: 25px;
			margin: 15px auto;
			background-image: url("img/call.png");
			background-position: 0 0;
			background-repeat: no-repeat;
		}
		.main-menu .callback .number {
			background-color: white;
			height: 55px;
			width: 200px;
			display: inline-block;
			color: black;
			font-size: 20px;
			line-height: 55px;
			text-transform: uppercase;
			padding-left: 22px;
			vertical-align: middle;
			float: left;
		}
		.title {
			margin-top: 150px;
		}
		.title h1 {
			font-size: 42px;
			line-height: 48px;
			color: #fff;
			margin-bottom: 20px;
		}
		.title button {
	    background-color: #48799a;
	    color: #fff;
	    -webkit-transition: all 0.3s ease-in-out;
	    -moz-transition: all 0.3s ease-in-out;
	    transition: all 0.3s ease-in-out;
	    margin-top: 10px;
	    font-weight: 700;
	    font-size: 16px;
	    line-height: 16px;
	    padding: 15px 25px;
		  background-image: none;
	    border: 1px solid transparent;
	    border-radius: 4px;
	    text-transform: uppercase;
		}
		@media only screen and (max-width : 992px) { 
			.main-menu .logo .bath-logo {
				margin-left: 20px;
			}
			.title {
				margin-top: 100px;
			}
			.title h1 {
				font-size: 38px;
			}
			.title button {
				width: 30%;
			}
		}
		@media only screen and (max-width : 600px) {
			.main-menu .logo .bath-logo {
				margin-left: 0;
			}
			.col-xs-12 {
				width: 285px;
				margin: auto;
				margin-bottom: 20px;	
			}
			.title {
				margin-top: 40px;
			}
			.title h1 {
				margin-top: 100px;
				font-size: 30px;
			}
			.title button {
				width: 40%;
			}
		}
		@media only screen and (max-width : 480px) { 
			.main-menu .logo .bath-logo {
				display: none;
			}
			.title h1 {
				font-size: 24px;
				line-height: 30px;
			}
			.col-xs-12 {
				margin-bottom: 0px;	
			}
			.title button {
				width: 60%;
			}
		}
	</style>
</head>
<body>
	<div class="main-menu">
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-3 logo">
              <div class="bath-logo"></div>
              </div>
              <div class="col-md-4 col-sm-9 col-xs-12 callback">
                  <div class="xs-wrapper">
                      <div class="phone-wrapper"><a href="tel:380487058625" class="phone"></a></div>
                      <a href="tel:380487058625" class="number">38 (048) 705 86 25</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <section id="content">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 text-center title">
  				<h1>Дякуємо за Вашу заявку<br>Ми зв'яжемось з Вами в найближчий час</h1>
  				<button type="button" onclick="location.href=&quot;index.php&quot;">На головну</button>
  			</div>
  		</div>
  	</div>
  </section>
</body>
<script src="js/bootstrap.min.js"></script>
</html>