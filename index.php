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
				echo '<p>You are logged in!</p>';
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