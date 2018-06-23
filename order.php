<?php
$servername="localhost";
$db="pacific";
	$user = "root";
	$pass="root";
$connection = mysqli_connect($servername,$user,$pass,$db);
session_start();
?>
<html>
	<head>
		<title>Welcome to JavaJam Coffee House</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/javacoffee.css">
	</head>
	<script type="text/javascript" src="js/order.js"></script>
	<body>
<?php

//this is called when order now button is clicked.
if (isset($_POST['order'])) 
{	$name=$_POST['name'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$cc=$_POST['cc'];
$month=$_POST['month'];
$year=$_POST['year'];
$Item1_Name="JavaJam Shirt";
$Item1_Qty=$_SESSION['prodname0'];
$Item2_Name="JavaJam Mug";
$Item2_Qty=$_SESSION['prodname1'];
$Item3_Name="Watch";
$Item3_Qty=$_SESSION['prodname2'];
$Item4_Name="Bag";
$Item4_Qty=$_SESSION['prodname3'];

//validates if any data is null then throws error
	if($name==""||$email==""||$addr==""||$city==""||$state==""||$zip==""||$cc=""||$month==""||$year=="")
	{
		echo "please enter data";
	}
	else
	{
		$sql = "INSERT INTO orders (Name, EmailId, Address, City, State, Zip, Credit_card, Month, Year,Item1_Name,Item1_Qty,Item2_Name,Item2_Qty,Item3_Name,Item3_Qty,Item4_Name,Item4_Qty)
        VALUES ('$name','$email','$addr','$city','$state','$zip','$cc','$month','$year','$Item1_Name','$Item1_Qty','$Item2_Name','$Item2_Qty','$Item3_Name','$Item3_Qty','$Item4_Name','$Item4_Qty')";
        mysqli_query($connection,$sql);
        echo "Data Inserted";
        header("index.php?signup=success");
	}
}

 
?>

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
						<li><a class="align" href="cart.php">Cart</a></li>
						<li><a class="align" href="order.php">Order</a></li>
					</ul>
				</div>
				<div class="colright">
					<header><h1>JavaJam Coffee House</h1></header>		
				
				<h2 align="center">Shopping Cart</h2>
				
					<table align="center" border="0" cellpadding="4" class="content">
					<tr id="contentrow">
						<td align="center"><b>Description</b></td>
						<td><b>Quantity</b></td>
						<td><b>Price</b></td>
					</tr>
					<tr id="contentrow" class="ycolor">
						<td align="center">JavaJam Shirt</td>
						<td><?php echo $_SESSION['prodname0']; ?></td>
						<td><?php echo $_SESSION['prodprice0']; ?></td>
					</tr>
					<tr id="contentrow">
						<td align="center">JavaJam Mug</td>
						<td><?php echo $_SESSION['prodname1']; ?></td>
						<td><?php echo $_SESSION['prodprice1']; ?></td>
					</tr>
					<tr id="contentrow" class="ycolor">
						<td align="center">Watch</td>
						<td><?php echo $_SESSION['prodname2']; ?></td>
						<td><?php echo $_SESSION['prodprice2']; ?></td>
					</tr>
					<tr id="contentrow">
						<td align="center">Bag</td>
						<td><?php echo $_SESSION['prodname3']; ?></td>
						<td><?php echo $_SESSION['prodprice3']; ?></td>
					</tr>
					<?php $total=$_SESSION['prodprice0']+$_SESSION['prodprice1']+$_SESSION['prodprice2']+$_SESSION['prodprice3'];?>
					<tr id="contentrow" class="ycolor">
						<td ></td>
						<td>Total</td>
						<td><?php echo "$total"; ?>	</td>
					</tr>
					</table>
					<fieldset class="myFieldset">
						<legend>Fill Details:</legend>
						<form  method="POST" name="myform" action="order.php">
							<table cellpadding="5" class="order_table" align="center">
								<tr>
									<td>Name</td>
									<td><input type="text" name="name" id="name1" ></td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="Email" name="email" id="email1"></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><textarea id="cart_ta" name="addr" cols="24"></textarea></td>
								</tr>
								<tr>
									<td>City</td>
									<td><input type="text" name="city" id="city"></td>
								</tr>
								<tr>
									<td>State</td>
									<td><input type="text" name="state" id="state"></td>
									<td>Zip</td>
									<td><input type="number" name="zip" id="zip"></td>
								</tr>
								<tr>
									<td>Credit Card</td>
									<td><input type="number" name="cc" id="cc"></td>
								</tr>
								<tr>
									<td>Expire Month</td>
									<td><input type="number" name="month" id="month"></td>
									<td>Year</td>
									<td><input type="text" name="year" id="year"></td>
								</tr>
								</fieldset>

							</table>
<button type="submit"  value="submit" name="order" id="order" onclick="validateOrder()" >Order Now</button>
						</form>

					
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