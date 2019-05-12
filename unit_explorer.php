<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!-- The main section for Home-->
<div class="body-container">

	<!-- The content for the Home section  -->
	<div class="content-container">
		<div class="content-header">
			<h1>Unit Explorer</h1>
		</div>

		<div class="content-body">
			<?php 
			if (isset($_SESSION['userId'])) {
                echo '
                <div class="content unit">
                    <div class="container unit">
                        <form>
                            <input name="all" type="submit" value="ALL">
                            <input name="bict" type="submit" value="BICT">
                            <input name="mits" type="submit" value="MITS">
                            <input name="campus" type="submit" value="By Campus">
                        </form>
                    </div>
                    <!-- The search bar for unit -->
                        <div class="search-bar">
                            <input type="text" placeholder="Search Question" name="searchbar">
                            <button type="submit">Search</button>
                    </div>
                    
                    <p><b>Question about how to adjust the tutorial time@by Soonja</b></p>
                    <p><b>You can email your lecture asking if  lecture</b></p>
                    <p><b>6:50pm 11 May 2019</b></p>
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