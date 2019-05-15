<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!-- The main section for Home-->
<div class="body-container">

	<!-- The content for the Home section  -->
	<div class="content-container">
		<div class="content-header">
			<h1>BICT/MITS HELP SITE</h1>
		</div>

		<div class="content-body">
			<?php 
			if (isset($_SESSION['userId'])) {
				if ($_SESSION['access'] == "admin") {
					echo '			
					<div class="news-container">
						<form class="news-admin" action="">
							<input name="title" type="text" placeholder="Title">
							<input name="message" type="text" placeholder="Message">
							<button name="message-submit" type="submit">Submit</button>
						</form>
						<ul class="newsreel">
							
						</ul>
					</div>';
				}
				
				echo '<p>You are logged in!</p>';

			} else {
				echo '
					<p>You are currently logged out!</p>
					<p>In order to view this website please signup and login</p>';
			}
			?>
			<div id="news-container">
				<form class="news-admin" action="">
					<input name="title" type="text" placeholder="Title">
					<input name="message" type="text" placeholder="Message">
					<button name="message-submit" type="submit">Submit</button>
				</form>
				<ul id="newsreel">
					<?php
						$sql = "SELECT * FROM news LIMIT 2";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {

							while ($row = mysqli_fetch_assoc($result)) {
								echo "<li>";
								echo $row['title'];
								echo $row['message'];
								echo "</li>";
							}
						} else {
							echo "There is no news!";
						}
					?>
				</ul>
				<button id="btn_news">Load</button>
			</div>

		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#btn_news").click(function() {
			$("#newsreel").load("includes/update_news.inc.php");
		})








	});
	//$(".newsreel").load("update_news.inc.php");


</script>
<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>