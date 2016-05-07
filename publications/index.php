<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Robotics Lab</title>
		<meta content="Robotics Lab" description="NITC Robotics Lab">
		<meta content="Robotics ,Lab,NITC" name="keywords">
		<meta content="Mahesh Uligade" name="Author">
		<script src="../jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/bootstrap.min.css">	
		<script src="../js/bootstrap.min.js"></script>

		<style>
/*		
			.body
			{
				background-color: #99B397;
			}*/
			.jumbotron
			{

				background: #11445E;// url(../images/backgroud_1.jpg) no-repeat fixed;
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
				padding: 50px 25px;
				/*//background-color: transparent 80%;*/
			}
			.container-fluid ul
			{
				text-align: center;
				padding: 0px;
			}
			.container-fluid li
			{
				/*display: block;*/
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
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="../#mainpage">Home</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="../faculty">Faculty</a></li>

						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="../#news_events">News Events</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="http://www.rignitc.com" target="_blank">RIG-NITC</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="../lab">Lab</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="../gallery">Gallery</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collpase" href="../publications">Publications</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="../research">Research</a></li>
						<li><a data-toggle="collapse" data-target=".navbar-collapse" href="../#contact_us">Contact Us</a></li>
					</ul>
				</div>
			</div>

		</nav>
		<div class="container-fluid">
			<h3>National Conference Papers</h3>
			<ol type="1">
				<li>Sudheer.A.P, Jayadev.P.K, Udhayakumar.S,"Reengineering the Engineering Education-A Comprehensive Case Study"Proccedings of 34th ISTE Annual Convention and National Seminar, New Delhi, December 18-20,2004.pp-2-014. </li>
				<li>Sudheer.A.P, P.K.Jayadev,"Inverse Kinematics Analysis and Joint space trajectory Planning For SCORBOT ERV Robot"Proceedings of the National Conference on Emerging Trends in Thermal Engineering, Competitive Manufacturing and Management, Chennai, January 24th &25th 2005.pp-1-6 </li>
				<li>Sudheer.A.P, Boby.K.George, P.K.Jayadev "Vision Based Driver Assistance System", Proceeding of the 21st AIMTDR conference, VIT, Vellore, December 20-22nd, 2005,pp-677-672. </li>
				<li>R.Narayanan, S.Udhayakumar, Sudheer A.P., "Multi-objective Optimization in 
				Turning -A genetic Approach", Proceeding of the National Conference on Globally competitive Eco Friendly Technologies In mechanical and Mechatronics Engineering (GETME 2005), Erode, Tamilnadu April 15 - 16, 2005,pp-H26-32. </li>
				<li>Santhakumar.M,.P.K.Jayadev,A.P.Sudheer, " Optimum Path Planning of Planar Robot for an Assembly Operation using genetic algorithm "Proceeding of the National Conference on Globally competitive Eco Friendly Technologies In mechanical and Mechatronics Engineering (GETME 2005), Erode, Tamilnadu April 15 - 16, 2005,pp-N15-22.</li>
				<li>M.Santhakumar,A.P.Sudheer,P.K.Jayadev,Shanmugha Sundharam"Modeling and Measurement of Kinematic error of Scora ER14 Robot Manipulator-A Jacobian Approach",Proceedings of National conference On Recent Trends on Science and Technology ,Chennai,May 26th&27th 2005. </li>
				<li>A.P.Sudheer,M.Santhakumar, P.K.Jayadev,Shanmugha Sundharam "Error Analysis of Compliant Robot Manipulator-Scorbot ERV",Proceedings of National conference On Recent Trends on Science and Technology ,Chennai,May 26th&27th 2005.pp142-145.</li>

			</ol>
		</div>
		<div class="container-fluid">
			<h3>International Conference Paper</h3>
			<ol type="1">
				<li>Sudheer.A.P., P.K.Jayadev, Santhakumar.M, Shanmugha sundharam "Analysis of Compliant error Robotic manipulator- Scorbot ER V", Proceedings of the International conference-ICMPM 2005,Erode,India,Dec 12th-14th 2005.pp964-972 </li>
				<li>Jackson Phinni, Sudheer.A.P ,Ramakrishna.M, Jemshed, "Obstacle Avoidance of wheeled mobile robot: A Genetic-neurofuzzy approach, IIScCentenary "International Conference on Advances in Mechanical Engineering (IC-ICAME),Bangalore, India, July 2-4, 2008. </li>
				<li>Ramakrishna.M,Sudheer.A.P "Stable Biped Locomotion in Step Ascending Using Genetic-Neuro-Fuzzy Approach "(Accepted in the AIMTDR international conference 2008)</li>
			</ol>
		</div>
		<div class="container-fluid">
			<h3>National /International Journal Paper</h3>
			<ol type="1">
				<li>Sudheer.A.P, Santhakumar.M, P.K.Jayadev, Shanmugha Sundaram"Position Analysis and Joint space Trajectory Planning for ABB IRB 7600 Robot"Journal of Manufacturing Technology Today Vol.4,pp25-28,October 2005 </li>
				<li>Sudheer.A.P, Santhakumar.M, S.Udhayakumar, Dr.R.Ravindran Nair" Reengineering the Engineering Education-A Solution for 21st Century" A comprehensive Case Study? Indian Journal of Technical Education vol.28,pp88-94, Oct-Dec 2005(3) Santhakumar.M Sudheer A.P, P.K.Jayadev " Optimum Path Planning of Scora ER 14(SCARA) Robot for an Assembly Operation using genetic algorithm" </li>
				<li>Journal of Manufacturing Technology Today Vol.5 Pp18-22, Nov.2006 </li>
				<li>Sudheer.A.P Santhakumar.MS.Udhayakumar " Pose Error Analysis of Scorbot ER V Robot using a Jacobian based Kinematic error Model"Indian Journal of Engineering, Science and Technology, Vol.1, Pp65-73 ,Jan 2007. </li>
				<li>Sudheer.A.P, G.varaprasad "A Solution for 21st centuary Higher education.-Reengineering?"University news-Ajournal of higher Education.Vol 45 ,No43, October 2007.pp4-8.( This paper has accepted as Book Chapter in the Encyclopedia of higher Education) </li>
				<li>Manu s Madhav,Narayanan,R.Ravikrishnan,Sudheer.A.P "Design, Analysis and Control of a Mobile Manipulator"-Journal of system science and Engg(Accepted for publication.)7) Jacksonphinni, Sudheer.A.P "Optimum path planning and obstacle avoidance of mobile robot in complex environment -A genetic nuerofuzzy approach" (Communicated to international journal of robotics and automation)</li>
			</ol>
		</div>
		<footer class="container-fluid text-center" style="margin-top:30px;padding:0px;margin-bottom:0px;">
			<p>	
				<a href="#mainpage" tilte="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
			</p>
			
				<a href="../about"><strong>&copy Robotics Lab</strong></a> 
			</p>
		</footer>
	</body>
</html>