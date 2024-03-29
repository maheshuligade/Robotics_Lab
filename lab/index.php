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
				padding: 100px 25px;
				/*//background-color: transparent 80%;*/
			}
			.container-fluid ul
			{
				
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
			<div class="row">
				<div class="col-sm-8">
					<h2>Nao Robot</h2>
					<p>Nao is an autonomous, programmable humanoid robot developed by Aldebaran Robotics.
						Nao robots are used for research and education purposes in numerous academic institutions worldwide.
					</p>
					<p>
						<h4>Make: Aldebaran Robotics.</h4>
						<h4>Specifications:</h4>
						
						<ul>	
							<li>Nao V5 Evolution</li>
							<li>Height	58 centimetres (23 in)</li>
							<li>Weight	4.3 kilograms (9.5 lb)</li>
							<li>Power supply	lithium battery providing 48.6 Wh</li>
							<li>Autonomy	90 minutes (active use)</li>
							<li>Degrees of freedom	25</li>
							<li>CPU	Intel Atom @ 1.6 GHz</li>
							<li>Built-in OS	NAOqi 2.0 (Linux-based)</li>
							<li>Compatible OS	Windows, Mac OS, Linux</li>
							<li>Programming languages	C++, Python, Java, MATLAB, Urbi, C, .Net</li>
							<li>Sensors	Two HD cameras, four microphones, sonar rangefinder, two infrared emitters and receivers, inertial board, nine tactile sensors, eight pressure sensors</li>
							<li>Connectivity	Ethernet, Wi-Fi</li>
						</ul>
					</p>
				</div>
				<div class="col-sm-4" style="margin-top:100px;">
					<img src="../images/Nao.jpg" width="100%" height="80%" >
				</div>
			</div>
		</div>
		<hr>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4" style="padding-top:200px;">
					<img src="../images/Qbot.jpg">
				</div>
				<div class="col-sm-8">
					<h2>Qbot 2</h2>
					<p>
						<h4>Make:Quanser</h4>
					<p>
						The Quanser QBot 2 for QUARC is an innovative open-architecture autonomous ground robot built on a 2-wheel mobile platform. Equipped with built-in sensors, a vision system, and accompanied by extensive courseware, the QBot 2 is ideally suited for teaching undergraduate and advanced robotics and mechatronics courses. 
					</p>
						<h4>Specifications:</h4>
						<ul>

							<li>Platform	Kobuki mobile base by Yujin Robot</li>
							<li>Number of wheels :2</li>
							<li>QBot 2 diameter	35 cm</li>
							<li>QBot 2 height (with Kinect mounted)	27 cm</li>
							<li>Battery life	3 hours</li>
							<li>Maximum linear speed	0.7 m/s</li>
							<li>Available payload	app. 4.5 kg</li>
							<li>
								<p >
									Sensors included:
								<br>
								<ul style="padding-left:30px;">
									<li>3 digital bumper sensors</li>
									<li>3 digital wheel drop sensors</li>
									<li>3 analog and digital cliff sensors</li>
									<li>3-axis gyroscope</li>
									<li>2 wheel encoder inputs</li>
									<li>2 wheel speed outputs</li>
									<li>2 digital LED outputs</li>
									<li>4 digital power enable outputs</li>
									<li>2 analog motor current inputs</li>
									<li>3 digital buttons</li>
									<li>2 overcurrent sensors</li>
									<li>1 Z-axis angle measurement (heading)</li>
									<li>1 battery voltage sensor</li>
									<li>1 Kinect RGBD sensor</li>
								</ul>
								</p>
							</li>
							<li>Additional I/O channels available	8 reconfigurable digital I/O channels</li>
							<li>4 analog input channels</li>
							<li>2 encoder input channels</li>
							<li>4 PWM output channels</li>
							<li>1 SPI bus channel</li>
							<li>1 UART serial port (interface 3.3 V serial device)</li>
							<li>1 I≤C serial bus channel</li>

							<li>On-board computer	Gumstix DuoVero Zephyr with integrated 802.11 b/g/n WiFi</li>
							<li>Memory	1 GB DDR SDRAM, 32 MB Flash</li>
							<li>QUARC maximum sample rate	1,000 Hz</li>
							<li>Camera resolution	640 x 480</li>
							<li>Depth sensing	11 bit</li>
							<li>Depth sensor range	0.5 m - 6 m</li>
						</ul>
					</p>
				</div>
				
			</div>
		</div>
		<hr>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>PLC Trainer Kit</h2>
					<p>
						<h4>Make: MTAB ENGINEERS PVT LTD, CHENNAI,INDIA</h4>
						<h4>Cost: 3.3lakhs Year: 1999</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Siemens PLC model S7-214; Total Digital inputs-22, Digital output-18; Analog Input-2, Analog Output-1.</li>
							<li>Step 7/Microsoftware: Digital Display TD200.</li>
							<li>Static Module, Sensor Module, Relay Module,5 Star-Delta Module and Conveyor Module and Pnematic Module.</li>
						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<img src="../images/plc.jpg">
				</div>
			</div>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<img src="../images/pctrainer.jpg">
				</div>
				<div class="col-sm-8">
					<h2>Process Control Trainer</h2>
					<p>
						<h4>Make: ANSHUMAN TECH PVT.LTD.,PUNE,INDIA.</h4>
						<h4>Cost: 1.3lakhs Year: 1999</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Electro Mechanical Setup.</li>
							<li>Sensors-PH-Sensor,Conductivity Sensor,Flowmeter, Humidity Sensor, and Smoke Sensor.</li>
						</ul>
					</p>
				</div>
				
			</div>
		</div>
		<hr>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>Scorbot Erv Robot</h2>
					<p>
						<h4>Make: ESHED ROBOTEC, ISRAEL.</h4>
						<h4>Cost: 4.2 lakhs. Year:1992</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Five DOF+ Servo Gripper with Teach Pendant ; Max Reach -610mm.</li>
							<li>Base Rotation-310 Degrees,Shoulder- ?130/-35 Degrees,Elbow- ?130Degrees, Wrist- ?130Degrees.</li>
							<li>Pay Load-1Kg.</li>

						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<img src="../images/scrbt.jpg">
				</div>
				
			</div>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<img src="../images/pnematics.jpg">
				</div>
				<div class="col-sm-8">
					<h2>Pnematic Trainer Kit:</h2>
					<p>
						<h4>Make: FESTO CONTROLS PVT LTD, BANGALORE, INDIA.</h4>
						<h4>Cost: 4.07 lakhs. Year: 2005</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Jun Air compressor-Out put Pressure-8bar, Speed of rotation- 2900rpm; Max. Operation-15min on/15min off 2.Profile plate and Stand ,Compressed air filter unit with pressure regulator and various types of Pressure control valves, cylinders, flow control valves and PLC.</li>
						</ul>
					</p>
				</div>
				
			</div>
		</div>
		<hr>


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>Mini Robot With Software</h2>
					<p>
						<h4>Make: MTAB ENGINEERS PVT LTD,CHENNAI, INDIA.</h4>
						<h4>Cost: 1.8 lakhs. Year: 2008</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Five DOF+ Gripper Open & Close</li>
							<li>Number of Stepper Motors : 5 Nos</li>
							<li>Payload : 250 gms</li>
							<li>Link Rotation: Waist- +300 degrees, Shoulder-+90 degrees, Elbow – +90 degrees Pitch – +180 degrees and Roll- +200 degrees </li>
							<li>Controller : PC based Stepper Control algorithm.</li>

						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<img src="../images/scrbt.jpg">
				</div>
				
			</div>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<img src="../images/rcs.jpg">
				</div>
				<div class="col-sm-8">
					<h2>Reconfigurable Universal Robot Kit- RCS-6 With Software</h2>
					<p>
						<h4>Make: FALCON,MUMBAI, INDIA.</h4>
						<h4>Cost: 1.15 lakhs. Year: 2008</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Types of Robots reconfigured : Snake, Chemist, Fingers, Golfer, Coffee Maker, Bubbler,Strider, Dancer, Thrower.</li>
							<li>Servo Motor Specifications :Range of Motion Per Axis : Max. 180 deg : Accuracy of Motions : 0.72 deg for 180 deg Range.</li>
						</ul>
					</p>
				</div>
				
			</div>
		</div>
		<hr>


		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>Reconfigurable Mobile Programmble Robot Kit</h2>
					<p>
						<h4>Make: LEGO GROUP, DENMARK</h4>
						<h4>Cost: 1.6 lakhs. Year: 2008</h4>
						<h4>Specifications:</h4>
						<ul>
							
							<li>Programmable 32-bit brick, including Bluetooth wireless communication Minimum 4 input, 3 output ports. 6-wire digital platform. </li>
							<li>8-bit AVR microcontroller and 32-bit ARM7 microcontroller</li>
							<li>3 Servo Motors with built-in rotation sensor.</li>
							<li>Lego Mindstorms Education NXT software . 5. Sound sensor, ultrasonic sensor and Light sensor. </li>
						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<img src="../images/lego.jpg">
				</div>
				
			</div>
		</div>
		<hr>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>Mac Pneumo Tutor</h2>
					<p>
						<h4>Specifications:</h4>
						<ul>
							
							<li>MAC-PNEUMO-TUTOR is planned for Hands-ON training on all aspects of 'Pneumatics'-the science of compressed air. It is provided with facility to understand, apply and have trials on different sections of Pneumatics </li>
						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<img src="../images/Mac_Pneumo_Tutor.jpg" width="80%">
				</div>
				
			</div>
		</div>
		<hr>



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
