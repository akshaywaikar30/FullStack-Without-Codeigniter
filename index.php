<?php

?>
<html>
	<head>
		<title>Welcome to JavaJam Coffee House</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/javacoffee.css">
	</head>
	<body>
		<div id="wrapper">
			<div class="row">	
				<div class="colleft">
					<img id="javajamlogo" src="images\javajamlogo.jpg" alt="javajamlogo">
					<ul>
					<!--We should not use nbsp as it wont collapse like multiple regular spaces.It is standard practise to follow padding and margins for spacing between elements.-->					
						<li><a class="align" href="index.php">Home</a></li>
						<li><a class="align" href="menu.php">Menu</a></li>
						<li><a class="align" href="music.php">Music</a></li>
						<li><a class="align" href="jobs.php">Jobs</a></li>
						<li><a class="align" href="gear.php">Gear</a></li>
						<li><a class="align" href="cart.php">Cart</a></li>
						<li><a class="align" href="placeyourorder.php">Order</a></li>
					</ul>
				</div>
				<div class="colright">	
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>
					<img src="images\windingroad.jpg" alt="windingroad" width=100% height=180px>
						<h2>Follow the Winding Road to JavaJam</h2>
							<p>
							We're a little out of the way, but take a drive down Route 42 to JavaJam today! Indulge in our locally roasted free-trade coffee and home-made pastries. You'll feel right at home at JavaJam!
							</p>
						<h3>JavaJam Coffee House features:</h3>
						<ul>
							<li>Speciality Coffee and Tea</li>
							<li>Bagels, Muffins and Organic Snacks</li>
							<li>Music and Poetry Readings</li>
							<li>Open Mic Night</li>
						</ul>	
						<br>
						<address id="address">
						54321 Route 42<br>
						Ellison Bay,WI 54210<br>
							<a href="tel:8885555555">888-555-5555</a>
						</address>

				</div>
			</div>
			<footer id="foot">
				<div id="empty"></div>
				<i>Copyright &copy;2018 JavaJam Coffee House</i><br>
				<address>
					<a id="fcolor" href="mailto:akshay@waikar.com">akshay@waikar.com</a>
				</address>
			</footer>
		</div>
	</body>
</html>