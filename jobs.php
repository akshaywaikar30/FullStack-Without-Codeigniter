	<!-- Here Database connection is made -->
	<?php
	$servername="localhost";
	$db="pacific";
		$user = "root";
		$pass="root";
	$connection = mysqli_connect($servername,$user,$pass,$db);
	?>
	<html>
	<head>
		<title>Welcome to JavaJam Coffee House</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/javacoffee.css">
			
	</head>
	<script src="js/jobs.js">

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
						<header>
							<h1>JavaJam Coffee House</h1>
						</header>
						<div id="natural"></div>
						<h2>Jobs at JavaJam</h2>
						<p id="p_size1">Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an astrisk (*).</p><br>
						<form method="POST" name="myform" action="jobs.php">
							<table id="tab">
								<!-- after submit button is clicked checks if any required field is empty -->
	<?php
	if(isset($_POST['submit']))
		{
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$experience=$_REQUEST['experience'];
			$error="";
			$nameError="";
			$emailError="";
			$expError="";
		if($name==""||$name==null)
		{
			$nameError="</t>Please enter name<br/>";
			$error=$nameError;
		}
		if($email==""||$email==null)
		{
			if($name==""||$name==null)
			{
				$emailError="Please enter email <br/>";
				$error=$error . $emailError;
			}
			else
			{	
				$emailError="  Please enter email <br/>";
				$error=$emailError;
			}
		}
		if($experience==""||$experience==null)
		{
			if($name==""||$name==null||$email==""||$email==null)
			{
				$expError="   Please enter experience<br/>";
				$error=$error . $expError;
			}
			else
			{
				$expError="   Please enter experience<br/>";
				$error=$expError;
			}
		}

		if($error!="")
		{
			echo $error;
		}
		else
		{
		//if all three contents are filled enters data in to the database.
			$sql = "INSERT INTO jobs (name, email, experience)
	        VALUES ('$name','$email','$experience')";
	        mysqli_query($connection,$sql);
	        echo "Data Inserted";
	        header("index.php?signup=success");
		}
	}
	?>
								<tr>
								<td class="name">
	          					<label class="formalign">*Name:</label></td>
	          					<td class="contentalign" ><input type = "text"
	                 			id = "name" name="name" 
	                 			/>
	        					</td>
	        					</tr>

	        					<tr class="name">
	          					<td><label class="formalign">*E-mail:</label></td>
	          					<td class="contentalign" ><input type = "Enter your E-mail"
	                 			id = "email" name="email" 
	                 			/></td>
	        					</tr>
	        					<tr class="name">
	        					<td>
	          					<label>*Experience:</label></td>
	          					<td class="contentalign" >
	          					<textarea id = "experience" name="experience" 
	                  			rows = "2"
	                 			cols = "28" ></textarea>
	        					</td>
	        					</tr>
	        					</table>
	        					<button type="submit"  value="submit" onclick="validateform()" name="submit" id="btn">Apply Now</button>
						</form>
					</table>
					
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
