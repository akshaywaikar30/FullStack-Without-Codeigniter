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
							<li><a class="align" href="index.php">Home</a></li>
							<li><a class="align" href="menu.php">Menu</a></li>
							<li><a class="align" href="music.php">Music</a></li>
							<li><a class="align" href="jobs.php">Jobs</a></li>
							<li><a class="align" href="gear.php">Gear</a></li>
							<li><a class="align" href="cart.php">Jobs</a></li>
							<li><a class="align" href="placeyourorder.php">Order</a></li>
						</ul>
					</div>
					<div class="colright">
						<header>
							<h1>JavaJam Coffee House</h1>
						</header>
						<img src="images\heroguitar.jpg" alt="heroguitar" width="100%" height="150px">
						<h2>Music at JavaJam</h2>
							<p id="p_size">The first Friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music you won't
							want to miss!
							</p>
							<!-- Database connection is made -->
							<?php
							$servername="localhost";
							$db="pacific";
							$user = "root";
							$pass="root";
							$connection = mysqli_connect($servername,$user,$pass,$db);
							// Query to fetch data from database
								$sql = "SELECT m.name, m.musician_image_url, p.Description, p.Month_Year FROM musician as m , perfomance as p where m.musicianid=p.MusicianId";
								$imagequery_run = $connection->query($sql); 
								$result = mysqli_query($connection, $sql);
								if ($imagequery_run) 
								{
	   							 // runs the loop untilit it fetches all the rows from the database
	    							while($row = $result->fetch_assoc())
	    							{
	        							//all the data is echoed using using php echo command. wherever the the data has to be fetched php variables are given
	        						echo '<p id="month"><strong>'.$row['Month_Year'].'</strong></p>';
									echo '<table id="tab">';
									echo '<td id="monthdesc">';
									echo '<img src="'.$row['musician_image_url']. '" alt="melaniethumb" height="25px" width="25px">';
									echo '</td>';
									echo '<td>';	
									echo $row['Description'];
									echo '</td>';
									echo '</table>';
									
	    							}
								}
								else
								{ 
								//if no row is present in database it echos 0 results
	    							echo "0 results";
								}
								?>
						
					</div>
				</div>
				<footer>
					<div id="empty"></div>
					<i>Copyright &copy;2018 JavaJam Coffee House</i><br>
					<address>
						<a id="fcolor" href="mailto:akshay@waikar.com">akshay@waikar.com</a>
					</address>
				</footer>
			</div>
		</body>
	</html>