<!DOCTYPE html>
<html>
<head>
	<title>My Projects</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('/css/mycv.css')}}"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
</head>
<body>
	<div id="projects">
		<h1 class="topic">Recent <span>projects</span></h1>
		<div class="dives">
			<div class="pair1">
			<div id="div1" class="divv">
				<p class="p1">Project 1</p>
				<p class="p2">Tele 2</p>
				<p class="p3">Tele2 is one of the fastest growing European telecom operators, offering customers the services they demanded for less money. This site gives you the opportunity to change your tariffs, change your number, fill out the balance without leaving home.</p>
			</div>
			<div id="div2" class="divv"><img src="{{asset('/css/1.png')}}" height="300px" width="500px"></div>
			</div>
			<div class="pair2">
			<div id="div3" class="divv"><img src="{{asset('/css/2.png')}}" height="300px" width="500px"></div>
			<div id="div4" class="divv">
				<p class="p1">Project 2</p>
				<p class="p2">Protect our land</p>
				<p class="p3">This site is an environmental protection company. Here you can write a petition, sign up for volunteering, waste handling.</p>
			</div>
			</div>
		</div>
	</div>
</body>
</html>