<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>

		<!-- The main section for Home-->
		<div class="main home">
			<?php 
				if (isset($_SESSION['userId'])) {
					echo '<p>You are logged in!</p>';
				}
				else {
					echo '<p>You are logged out!</p>';
				}
			?>
            <!-- The content for the Home section  -->
			<div class="content home">
                
                <div class="container home">
                    <h2>BICT/MITS HELP SITE</h2>


                </div>

			</div>
			
		</div>

<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>