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

				if ($_SESSION['access'] > 1) {
				echo '
					<form action="includes/update_news.inc.php" method="post">
						<input name="title" type="text" placeholder="Title">
						<input name="message" type="text" placeholder="Message">
						<button name="message_submit" type="submit">Submit</button>
					</form>
					';
				}

			} else {

			}
			?>
			<div class="news_container">

				<ul class="newsreel">
					<?php
						$sql = "SELECT * FROM news LIMIT 4";
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) {

							while ($row = mysqli_fetch_assoc($result)) {
								echo "<li>";
								echo '<h2>' . $row['title'] . '</h2>';
								echo '<p>' . $row['message'] . '</p>';
								echo "</li>";
							}
						} else {
							echo "There is no news!";
						}
					?>
				</ul>
			</div>

		</div>
	</div>
</div>

<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>