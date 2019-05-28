<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!-- The main section for Home-->
<div class="body-container">

	<!-- The content for the Home section  -->
	<div class="content-container">
		<div class="content-header">
            <h1>User account page</h1>

			
		</div>

		<div class="content-body">
			<?php 
			if (isset($_SESSION['access'])) {
				if ($_SESSION['access'] == "admin") {
					
				}
				

			} else {
                header('Location: ./index.php?error=access');
                exit();
			}
			?>

		</div>
	</div>
</div>

<!--Contains closing tags for body and html-->
<?php include("Footer/footer.php");?>
