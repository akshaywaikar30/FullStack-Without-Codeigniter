<!-- Database connection is made -->
<?php
$servername="localhost";
$db="pacific";
	$user = "root";
	$pass="root";
$connection = mysqli_connect($servername,$user,$pass,$db);
//Starting a session
session_start();
?>
<html>
	<head>
		<title>Welcome to JavaJam Coffee House</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/javacoffee.css">
	</head>
	<script type="text/javascript" src="cart.js"></script>
	<body>
		<?php
// Declaring session variables for product name and price
		for ($i=0; $i < 4 ; $i++) { 
			$_SESSION['prodname'.$i] = ((isset($_SESSION['prodname'.$i])) ? $_SESSION['prodname'.$i] : 0);
			$_SESSION['prodprice'.$i] = ((isset($_SESSION['prodprice'.$i])) ? $_SESSION['prodprice'.$i] : 0);
			$_SESSION['btnclick'.$i] = ((isset($_SESSION['btnclick'.$i])) ? $_SESSION['btnclick'.$i] : 0);
		
		}

			if(isset($_POST['submit0'])) {
		//assign value whenever first button is clicked	, and redirects to cart page	
	$_SESSION['prodname0'] = $_SESSION['prodname0'] + 1;
	$_SESSION['prodprice0'] = (($_SESSION['prodname0'])* 14.95);
	header('location: cart.php');
}
	if(isset($_POST['submit1'])) {
	$_SESSION['prodname1'] = $_SESSION['prodname1'] + 1;
	$_SESSION['prodprice1'] = (($_SESSION['prodname1'])* 9.95);
	header('location: cart.php');
}
	if(isset($_POST['submit2'])) {
	$_SESSION['prodname2'] = $_SESSION['prodname2'] + 1;
	$_SESSION['prodprice2'] = (($_SESSION['prodname2'])* 16.50);
	header('location: cart.php');
}
	if(isset($_POST['submit3'])) {
	$_SESSION['prodname3'] = $_SESSION['prodname3'] + 1;
	$_SESSION['prodprice3'] = (($_SESSION['prodname3'])* 18.49);
	header('location: cart.php');

}
	?>
		<div id="wrapper">
			<div class="row">	
				<div id="gcolleft">
					<img id="javajamlogo" src="images\javajamlogo.jpg" alt="javajamlogo">
					<ul>					
						<li><a class="align" href="index.php">Home</a></li>
						<li><a class="align" href="menu.php">Menu</a></li>
						<li><a class="align" href="music.php">Music</a></li>
						<li><a class="align" href="jobs.php">Jobs</a></li>
						<li><a class="align" href="gear.php">Gear</a></li>
						<li><a class="align" href="cart.php">Cart</a></li>
						<li><a class="align" href="placeyourorder.php">Order</a></li>
					</ul>
				</div>
				<div id="gcolright">
					<header id="gheader">
						<h1>JavaJam Coffee House</h1>
					</header>
					<img src="images\couch.jpeg" alt="heroguitar" width="100%" height="180px">
					<h2>JavaJam Gear</h2>
						<p id="p_size">JavaJam gear not only looks good, it's good to your wallet, too<br>
							 Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!
						</p>
						
						
							
							
								<?php
									$sql="SELECT productsid,name,description,product_image_url,price FROM products";
									$imagequery_run = $connection->query($sql); 
									$result = mysqli_query($connection, $sql);
									
									$btnclick=0;
									if ($imagequery_run) 
										{
   							 			//fetches all the rows from the data and displays on the page
    										while($row = $result->fetch_assoc())
    											{
    												echo '<table class="gtablerow">';
    												echo '<tr>';
    												echo '<td rowspan="2">';
        											echo '<img src="'.$row["product_image_url"].'" valign="top" alt="shirt" height="40px" width="50px">';
        											echo '</td>';

        											echo '<td class="gitems" valign="top">'.$row["description"].'</td>';
        											echo '</tr>';
        											echo '<tr>';
        											echo '<td id="gitems" rowspan="2">';
        											echo '<form method="post">';
        										
        											echo '<input type="submit" class="btnadjust" name="submit'.$btnclick.'" value="Add to cart" >';
        											$btnclick=$btnclick+1;
        											echo '</form>';
        											echo '</td>';
        											echo '</tr>';
        											echo '</table>';
        											echo '<br/>';
        										}
										}
																												
																

								?>
					
				</div>
			</div>
			<footer id="gfooter">
				<div id="empty"></div>
				<i>Copyright &copy;2018 JavaJam Coffee House</i><br>
				<address>
					<a id="fcolor" href="mailto:akshay@waikar.com">akshay@waikar.com</a>
				</address>
			</footer>
		</div>
	</body>
</html>