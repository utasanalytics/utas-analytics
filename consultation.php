<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!--Insert Your CSS include statement here-->

<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<div class="container">
		<!-- The sidebar -->
		<div class="sidebar">
			<h3 class="title">ANALYTICS BICT & MITS </h3>
			<ul>
				<li><a href="">Unit Explorer</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="">Consultation</a></li>
				<li><a href="">Profile</a></li>
			</ul>
		</div>

		<!-- The main section for FAQ-->
		<div class="main">

			<!-- The Login for the FAQ section  -->
			<div class="login"><button type="submit">Login/Logout</button></div>


            <!-- The content for the FAQ section  -->
			<div class="content">
				
				<h2>Book a Consultation:</h2>
				
				<form>
					<b>Staff Name:</b>
					<select name="staff">
						<option>Soonja</option>
						<option>Erin</option>
						<option>Matthew</option>
					</select><br><br>

					<b>Time:</b>
					<input type="Time" name="time"><br><br>

					<b>Location: </b>
					<select name="location">
						<option>Hobart</option>
						<option>Launceston</option>
					</select><br><br>

					<b>Utas ID: </b>
					<input type="text" name="id"><br><br>

					<b>Email: </b>
					<input type="Email" name="id"><br><br>

					<input type="submit" value="submit">

				</form>

			</div>
			
		</div>




<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>