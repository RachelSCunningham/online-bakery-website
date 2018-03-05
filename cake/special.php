<!DOCTYPE html>
<!--Author: Rachel Cunningham-->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Online Bakery Website">
	<meta name="keywords" content="Bakery, Rachel, Cake, Bread, Bake, Cupcake, Muffin">
	<meta name="author" content="Rachel Cunningham">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">
	
	<title>Speciality Cakes</title>
	
<style>
	/*Defines the background colour of the page as light pink.*/
	body {
		background-color: #FEDEF9;
	}
	
	/*Defines the wrapper class in which most of the content resides. Width, margin, colour, and font styles all defined.*/
	.wrapper {
		width: 940px;
		margin: 20px auto 20px auto;
		border: 6px solid white;
		color: white;
		background-color: darkred;
		font-family: 'Love Ya Like A Sister', cursive;
		border-radius: 15px 15px 15px 15px; 
	}
	
	/*Defines the page footer at the bottom of the page.*/
	footer {
		clear: both;
		color: darkred;
		background-color: #FEDEF9;
		height: 45px;
		text-align: center;
		border-radius: 0px 0px 5px 5px; 
	}

	/*gives the class 'desc' within the section its own definitions of margins and border radius.*/
	section.desc {
		margin: 20px 20px 20px 20px;
		text-align: center;
		border-radius: 15px 15px 15px 15px; 
	}
	
	/*defines the header image at the top of the page.*/
	img.header {
		display: block;
		width: 700px;
		border-radius: 15px 15px 15px 15px;
		margin-left: auto;
		margin-right: auto; 
		border-radius: 15px 15px 15px 15px; 
	}
	
	/*describes the height of the FB image.*/
	img.facebookImage{
		height: 15px;
	}
	
	/*Gives the link image a white border.*/
	img.linkImage{
		border: 5px solid white;
	}
	
	/*Defines the sidebar menu id.*/
	#mySidenav a {
		position: absolute; 
		left: 10px; 
		transition: 0.1s; 
		padding: 15px; 
		width: 120px; 
		text-decoration: none; 
		font-family: 'Love Ya Like A Sister', cursive;
		font-size: 20px; 
		color: white; 
		border-radius: 0 15px 15px 0; 
	}
	
	/*Asserts the animation on hover over the ids Sidenav: i.e. on hover move to the left.*/
	#mySidenav a:hover {
		left: 0; 
	}
	
	/*Defines each of the sidebar items and their ids.*/
	#home {
		top: 250px;
		background-color: darkred;
	}

	#bread {
		top: 310px;
		background-color: darkred; 
	}

	#cake {
		top: 370px;
		background-color: darkred;
	}

	#confec {
		top: 430px;
		background-color: darkred;
	}
	
	#logIn {
		top: 490px;
		background-color: darkred;
	}
	
	#faq {
		top: 550px;
		background-color: darkred;
	}
	
	#contact {
		top: 610px;
		background-color: darkred;
	}
	
	#facebook{
		top: 670px;
		background-color: darkred;
	}
	
	/*Gives a colour to each of the text links, light pink.*/
	#links {
		color: #FEDEF9;
	}
	
	/*Centers the table, collapses borders, defines the width, and makes the bg colour pink and text colour dark red.*/
	Table{
		margin-left: auto;
		margin-right: auto; 
		border-collapse: collapse;
		width: 500px;
		background-color: #FEDEF9;
		color: darkred;
	}
	
	/*Makes the table borders white.*/
	table, th, td {
    border: 5px solid white;
	}
	
	/*Define the heading height.*/
	th {
    height: 50px;
	}
	
	/*Aligns the text.*/
	td {
		text-align: left;
	}
	
	/*Makes the row of the table turn white if hovered over.*/
	tr:hover {
		background-color: white;
	}
</style>	
</head>
<body>
	<header>
		<!--The header image of the page-->
		<img class="header" src="../images/header.png" alt="Image of logo header" title="Header Logo">
		
		<!--Sidebar navigation-->
		<nav>
			<div id="mySidenav" class="sidenav">
				<a href="../index.html" id="home">Home</a>
				<a href="../bread.html" id="bread">Breads</a>
				<a href="../cakes.html" id="cake">Cakes</a>
				<a href="../confec.html" id="confec">Confectionary</a>
				<a href="../logIn.html" id="logIn">Check Out</a>
				<a href="../faq.html" id="faq">F.A.Q.</a>
				<a href="../contactUs.html" id="contact">Contact Us</a>
				<a href="https://www.facebook.com/search/top/?q=rachel%27s%20bakery" id="facebook" target="_blank">Facebook <img class="facebookImage" src="../images/facebook.png" alt="Image of facebook logo" title="Facebook Link"></a>
			</div>
		</nav>
	</header>
	<div class="wrapper">
		<section id="text" class="desc">
			<p>
					We produce special cakes for special occasion. Whether it is a birthday party, an engagment, an anniversary, graduation or indeed a wedding we have experience of creating special cakes for your special needs. <br>
					Prices vary on size, content and personal requests.<br>
					Get in touch with us to discuss an order. You can visit us at our Bakery in Sligo or <a id="links" href="../contactUs.html">ring us</a> at 071 9166666.<br>
				<br>
				<!--Creates a database using content from a SQL database hosted on XAMPP--> 
				<?php
					$dbhost = "localhost";
					$dbuser = "root";
					$dbpassword = "";
					$dbname = "specialcakes";
					
					//Starts the connection:
					$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
					
					if(mysqli_connect_errno()){
						die("DB connection failed: " .
							mysqli_connect_error() .
								" (" . mysqli_connect_errno() . ")"
								);
					}

					if (!$connection)
						{
							die('Could not connect: ' . mysqli_error());
						}

					$result = mysqli_query($connection,"SELECT * FROM specialcakes");
					
					//Echos out the content of the table using the headings:
					echo "<table border='1' id='myTable'>
					<tr>
					<th>CAKETYPE</th>
					<th>MULTITIER</th>
					<th>BASICCOST</th>
					</tr>";
					
					//And then the content rows:
					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>" . $row['CAKETYPE'] . "</td>";
						echo "<td>" . $row['MULTITIER'] . "</td>";
						echo "<td>" . $row['BASICCOST'] ."</td>";
						echo "</tr>";
					}
					
					echo "</table>";

					mysqli_free_result($result);
					
					//Closes the connection:
					mysqli_close($connection);
				?>
				<br>
			</p>
			<img class="linkImage" src="../images/cake/speciality.jpg" alt="Image of a wedding cake" title="Wedding Cake">
		</section>
		<!--Footer at the bottom of the page.-->
		<footer>
			<br>
			<b>DISCLAIMER: This is not a real bakery or website. All images and prices are for illustration purposes only.</b><br>
		</footer>
	</div>
</body>
<script>
</script>
</html>