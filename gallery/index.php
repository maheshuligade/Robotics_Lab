<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Robotics Lab</title>
		<meta content="Robotics Lab" description="NITC Robotics Lab">
		<meta content="Robotics ,Lab,NITC" name="keywords">
		<meta content="Mahesh Uligade" name="Author">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<script src="/jquery/jquery.min.js"></script>	
		<script src="/js/bootstrap.min.js"></script>


		<style>
/*		
			.body
			{
				background-color: #99B397;
			}*/
			.jumbotron
			{

				background: #11445E;// url(/images/backgroud_1.jpg) no-repeat fixed;
				background-size: cover;
				text-align:center;
				height: 450px;
				color: #ffffff;//#912F40;
				padding: 150px 25px;
			}
/*			.jumbotron h1
			{
			//	margin-top:150px;
			}*/
			.navbar
			{
				margin-bottom: 0px;
				//height: 90px;
				//padding-top: 30px;
				background-color: #11445E;//transparent;
				z-index: 9000;
				border: 0;
				font-size: 16px !important;
				line-height: 1.42 !important;
				letter-spacing: 1px;
				border-radius: 0px;
			}
			.navbar li a,.navbar .navbar-brand
			{
				
				color: #ffffff !important;
			}
			.navbar-nav li a:hover,.navbar-nav li.active a
			{
				
				color: #11445E  !important;//#123456 !important;
				background-color: #ffffff !important;
			}
			.navbar-default
			{
			
				border-color: transparent;;
				color: #ffffff !important;
			}
			.col-sm-4,.col-xs-12
			{

				display: :block;
				text-align: center;
			}
			.footer .glyphicon
			{
			
/*				//margin-bottom: 20px;*/
				font-size: 20px;
				color: #11445E;;

			}

			.glyphicon
			{
				color:  #11445E; !important;
				font-size: 20px;
			}
			.container-fluid
			{
				color:#11445E;;
				padding: 100px 25px;
				/*//background-color: transparent 80%;*/
			}
			.container-fluid ul
			{
				text-align: center;
				padding: 0px;
			}
			.container-fluid li
			{
				display: block;
			}
			.glyphicon-star
			{
				color: #89043D;
			}
			.bg-grey
			{
				background-color: #f6f6f6;
			}
			.carousel-caption
			{
				color: #ffffff !important;
			}
			.carousel
			{
				width: 90%;
			
				margin: auto;
			}
			.carousel-inner img
			{
				width: 90%;
			
				margin: auto;
			}
			@media(max-width: 600px)
			{
				.carousel-caption
				{
					display: none;
				}
			}

		</style>

	</head>
	
	<body id="mainpage" data-spy="scroll" data-target=".navbar" data-offset:"50" class="bg-grey">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainpageNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#mainpage" style="font-size:26px;padding-left:20px;"><strong>Robotics Lab</strong></a>
				</div>
				<div class="collapse navbar-collapse" id="mainpageNavbar" >
					<ul class="nav navbar-nav navbar-right">
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="/#mainpage">Home</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="/faculty">Faculty</a></li>

						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="/#news_events">News Events</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="http://www.rignitc.com" target="_blank">RIG-NITC</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="/lab">Lab</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="/gallery">Gallery</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="/publications">Publications</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="/research">Research</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="/#contact_us">Contact Us</a></li>
					</ul>
				</div>
			</div>

		</nav>
		<div id="gallary-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="gallary-carousel" data-slide-to="0" class="active"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/images/dr_ashish_dutta_visit.jpg" alt="Dr.Ashish Dutta Visit">
					<div class="carousel-caption">
						<h3>Dr.Ashish Dutta visit to the Robotics Lab</h3>
						<p>
							Prof. Dr. Ashish Dutta from ‪#‎IITKanpur‬ sharing words of wisdom with RIG-NITC on Tuesday during his visit to Natioanal Institute of Technology,Calicut
						</p>
					</div>
				</div>

			</div>
			<a class="left carousel-control" href="#gallary-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#gallary-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>
		<footer class="container-fluid text-center" style="margin-top:30px;padding:0px;margin-bottom:0px;">
			<p>	
				<a href="#mainpage" tilte="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</p>
			
				<a href="/about"><strong>&copy Robotics Lab</strong></a> 
			</p>
		</footer>
	</body>
</html>