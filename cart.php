<!-- 
Starts the session and makes a db connection -->
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
		<script src="js/cart.js">

</script>
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
						<li><a class="align" href="cart.php">Cart</a></li>
						<li><a class="align" href="placeyourorder.php">Order</a></li>
					</ul>
				</div>
				<div class="colright">
					<header><h1>JavaJam Coffee House</h1></header>
			
				<h2 align="center">Shopping Cart</h2>
 
					<table class="content" align="center" border="0" cellpadding="10">
					<tr id="contentrow1">
						<td align="center"><b>Description</b></td>
						<td><b>Quantity</b></td>
						<td><b>Price</b></td>
					</tr>
					<tr id="contentrow1" class="ycolor">
                        <!-- Calls the values stored in session variables from gear and displays here -->
                        <td align="center">JavaJam Shirt</td>
                        <td align='center'><?php echo $_SESSION['prodname0']; ?></td>
						<td align='center'>$<?php echo $_SESSION['prodprice0']; ?></td>
                    </tr>
                    <tr id="contentrow1">
                        <td align="center">JavaJam Mug</td>
						 <td align='center'><?php echo $_SESSION['prodname1']; ?></td>
                        <td align='center'>$<?php echo $_SESSION['prodprice1']; ?></td>
                        </tr>
                         <tr id="contentrow1"  class="ycolor">
                            <td align="center">Watch</td>
                         <td align='center'><?php echo $_SESSION['prodname2']; ?></td>
                        <td align='center'>$<?php echo $_SESSION['prodprice2']; ?></td>
                    </tr>
                     <tr id="contentrow1">
                        <td align="center">Bag</td>
                         <td align='center'><?php echo $_SESSION['prodname3']; ?></td>
                        <td align='center'>$<?php echo $_SESSION['prodprice3']; ?></td>
						</tr>
                        <?php
                        $total=$_SESSION['prodprice0']+$_SESSION['prodprice1']+$_SESSION['prodprice2']+$_SESSION['prodprice3'];
                        ?>
                        <tr id="contentrow1"  class="ycolor">
                        <td align="center"></td>
                         <td align='center'>Total</td>
                        <td align='center'>$<?php echo "$total"; ?></td>
                        </tr>
                    </table>
                        <form class="cart_form">                     
                            <input type="button" onclick="location.href='placeyourorder.php';" value="Place Order"" />
                            
                            <input type="button" name="continue" value="Continue Shopping" onclick="location.href='gear.php';" align="right" class="cart_input">
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