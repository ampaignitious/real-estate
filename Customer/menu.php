	<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real estates company</title>
	<link rel="stylesheet" type="text/css" href="../includes/design/maincss.css"/>
	<?php
	session_start();
	include("../includes/common.php");

	if (isset($_SESSION['client'])) {
		# code...
 ?>
	<style >
		body{
			 	background-image: url("../images/gome.png");
				background-size: 800px;
				background-repeat: no-repeat;
				background-position: center;
		}
	</style>
 </head>

<body>

<div class="sidebar">
  <a class="active" href="#home">Customer's Menu</a>
  <a href="#">Make a Field Visit</a>
  <a href="#contact">About Us</a>
  <a href="#about">Contact</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
  <p class="header1"><?php echo $_SESSION["client"]; ?> hh</p>
  <p>"Are you looking for a property for buying, renting or do you have any property for sale. Don't be faked we are the best dealeres when it comes to property management." </p>
  <form action="makeVisit.php" method="POST">
		<label>Choose Property</label><br/>
			<select name="property">
				<option>Choose a property</option>
				<?php include_once "displayProperty.php";?>
	        </select>
			  <br/>
				<label>Time of Booking</label><br/>
			 <input type="time" name="time" />

			 <br/>
			 <label>Date of Booking</label><br/>

			<input type="date" name="date"/><br/>

		   <input type="submit" name="submit" value="Book"/>
		</form>
   </div>

</body>
</html>


<?php 
	} else {
		header("location : customerlogin.php");
	}
?>