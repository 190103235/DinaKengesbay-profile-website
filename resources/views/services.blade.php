<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('/css/mycv.css')}}"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
</head>
	<style type="text/css">
		
	</style>
<body>
	<div id="services">
		<h1 class="topic">{{__('Serv')}}<span>{{__('i')}}</span>{{__('ces')}}</h1>
		<p class="description">{{__('Being a Computer Science graduate, student of Masters and a Geek I have a firm grip on Programming Concepts and Android Programming. My life is all about computer and its vast horizons, my aim is to ace them. Share your problem and get 100% accurate solution in low-price')}}</p>

		<div class="container">
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/49153534/original/35d24c0700028612655af67e156ffd1c8f345307.jpg" width="100%" height="50%"> 
				<div class="card-body">
					<h4 class="card-title">{{__('Applications')}}</h4>
    				<p class="card-text">{{__('I will code android applications in android studio')}}</p>
    				<p class="price">starting at $50</p>
				</div>
			</div>
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/49149944/original/ad1505800ce49eff38e5ff76b9bc62c645468544.png" width="100%" height="50%">
				<div class="card-body">
					<h4 class="card-title">{{__('Websites')}}</h4>
    				<p class="card-text">{{__('I will create websites for your business')}}</p>
    				<p class="price">{{__('starting at')}} $100</p>
				</div> 
			</div>
			<div class="card" style="width: 250px"> 
				<img class="card-img-top" src="https://fiverr-res.cloudinary.com/t_gig_cards_web,q_auto,f_auto/gigs/49155214/original/91441264da5ea84358c6302390843b470ddcb7e9.jpg" width="100%" height="50%">
				<div class="card-body">
					<h4 class="card-title">{{__('Debugging')}}</h4>
    				<p class="card-text">{{__('I will make and debug IOS applications')}}</p>
    				<p class="price">{{__('starting at')}} $5</p>
				</div>
			</div>
	</div>
	</div>
</body>
</html>