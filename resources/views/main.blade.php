<!DOCTYPE html>
<html>
<head>
	<title>My CV</title>
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
	<div class="nav">
		<label for="toggle">&#9776;</label>
	</div>
	<input type="checkbox" name="" id="toggle">

	<div class="header">
		<h1 id="logo"><span>D</span>ina <span>K</span>engesbay</h1>
		<ul>
            <li><a href="http://127.0.0.1:8000/main" data-after="Home">Home</a></li>
            <li><a href="http://127.0.0.1:8000/services" data-after="Service">Services</a></li>
            <li><a href="http://127.0.0.1:8000/projects" data-after="Projects">Projects</a></li>
            <li><a href="http://127.0.0.1:8000/about" data-after="About">About</a></li>
            <li><a href="http://127.0.0.1:8000/contact" data-after="Contact">Contact</a></li>
         </ul>
	</div>
	<div class="part1" id="home">
		<div class="name">
			<h1>Hello, <span></span></h1>
        	<h1>My Name is <span></span></h1>
        	<h1 id="dina">Dina <span></span></h1>
        	<a href="about" type="button" class="cta">Portfolio</a>
		
		<img src="https://cdn130.picsart.com/301072921017211.png?type=webp&to=min&r=1024">
	</div>
	</div>
</body>
</html>