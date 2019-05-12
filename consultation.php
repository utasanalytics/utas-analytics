<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!-- The main section for Home-->
<div class="body-container">

	<!-- The content for the Home section  -->
	<div class="content-container">
		<div class="content-header">
			<h1>Consultation</h1>
		</div>

		<div class="content-body">
			<?php 
			if (isset($_SESSION['userId'])) {
				echo '
				<div class="content-consult">
				
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

				</div>';
			} else {
				echo '
					<p>You are currently logged out!</p>
					<p>In order to view this website please signup and login</p>';
			}
			?>
		</div>
	</div>
</div>
<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>