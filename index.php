<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Robotics Lab</title>
		<meta content="Robotics Lab" description="NITC Robotics Lab">
		<meta content="Robotics ,Lab,NITC" name="keywords">
		<meta content="Mahesh Uligade" name="Author">
		<script src="jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">	
		<script src="js/bootstrap.min.js"></script>

		<style>
/*		
			.body
			{
				background-color: #99B397;
			}*/
			.jumbotron
			{

				background: #11445E;// url(images/backgroud_1.jpg) no-repeat fixed;
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
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="#mainpage">Home</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="faculty">Faculty</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="#news_events">News Events</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="http://www.rignitc.com" target="_blank">RIG-NITC</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="lab">Lab</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="gallery">Gallery</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="publications">Publications</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="research">Research</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="#contact_us">Contact Us</a></li>
					</ul>
				</div>
			</div>

		</nav>

		<div class="jumbotron text-center ">
			<h1>Robotics<br>/Mechatronics Lab</h1>
			<p>National Institute of Technology,Calicut</p>

		</div>
		<div id="news_events" class="container-fluid bg-grey">
			<h2 style="margin-bottom:50px;text-align:center;" >News Events</h2>
			<p >
				<ul>
<!--					<li><span class"glyphicon glyphicon-star"></span> Site Launch</li>-->
					<marquee id = "brochure" behavior="scroll" direction="left" scrollamount="6"  ><li>
						<div onMouseOver = "document.getElementById('brochure').stop();" onMouseOut = "
document.getElementById('brochure').start();"><span class="glyphicon glyphicon-star"></span><a href = "images/Brochure.pdf" target="_blank">National workshop on "ROBOTICS AND CONTROL" during 23rd to 27th,May 2016</a></div></li></marquee>
				</ul>
			</p>
		</div>
		<hr>
		<div id="contact_us" class="container-fluid bg-grey">
			<h2 style="text-align:center;margin-bottom:50px;" >Contact Us</h2>
			<div class="row">
				
				<div class="col-sm-4 col-xs-12">
					<span class="glyphicon glyphicon-map-marker center"></span>

					<p >Robotics Lab,</br>Mechanical Engineering Department,</br>NIT Calicut,NITC Campus P.O,</br>Kozhikode,Kerala,India-673601</p>
				</div>
			
				<div class="col-sm-4 col-xs-12">
					<span class="glyphicon glyphicon-phone-alt"></span>
					<p>+91495 2286444</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<span class="glyphicon glyphicon-envelope"></span>
					

					<p>apsudheer@nitc.ac.in</p>
				</div>
			<div>
		</div>
		<hr style="padding-bottom:200px;">

  		<div id="contact_us_map" style="width:100%;height:400px;" ></div>
  		<script src="http://maps.googleapis.com/maps/api/js"></script>
  		<script>
  			var location_center=new google.maps.LatLng(11.321730, 75.936030);
  			function initialize()
  			{
  				var maploc={center:location_center,zoom:17,scrollwheel:false,draggable:false,
  					mapTypeId:google.maps.MapTypeId.ROADMAP};

  				var map= new google.maps.Map(document.getElementById("contact_us_map"),maploc);
  				var marker =new google.maps.Marker({position:location_center,});
  				marker.setMap(map);
  			}
  			google.maps.event.addDomListener(window,'load',initialize);
  		</script>
  		<footer class="container-fluid text-center" style="margin-top:30px;padding:0px;margin-bottom:0px;">
			<p>	
				<a href="#mainpage" tilte="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</p>
			
				<a href="about"><strong>&copy Robotics Lab</strong></a> 
			</p>
		</footer>
	</body>
	
</html>
