<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!-- The main section for Home-->
<div class="body-container">

	<!-- The content for the Home section  -->
	<div class="content-container">
		<div class="content-header">
			<h1>Frequently Asked Questions</h1>
		</div>

		<div class="content-body">
			<?php 
			if (isset($_SESSION['userId'])) {
				echo '
				<div class="content-faq">
					<h2>Frequently Asked Questions</h2>
					<!-- The search bar for FAQ -->
					<div class="search-bar">
						<!-- <form action="/.php"> will need to be added here-->
							<input type="text" placeholder="Search unit for FAQ!" name="searchbar">
							<button type="submit">Search</button>
					</div>
					
					<p><b>1. How do i find FAQ for my units?.</b></p>
					<p>Enter your unit code or name above in the search bar, to access FAQ for your desited units. </p>
					<p><b>2. What if the FAQ does not address my issues or enquiries?</b></p>
					<p>You can go to the consultation page to book a meeting with the unit coordinator for further enquiries or contact them via email.</p>
					<p><b>3. What if i can not find a unit?</b></p>
					<p>The FAQ only contains current BICT AND MITS units.</p>
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


<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>

	<!-- The container for the web page -->
	

		<!-- The main section for FAQ-->
		<div class="main faq">

            <!-- The content for the FAQ section  -->
			
			
		</div>
	
        
<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>