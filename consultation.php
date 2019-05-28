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
			
				
				<form class="booking-consult">

					<h2>Book a Consultation:</h2>

					<table>
				
   
			     <label>Staff: </label>
        <select name="staff">
         <option value="select">Select Staff</option>
         <option value="soonja">Soonja</option>
         <option value="soonja">Matthew</option>
         <option value="soonja">Erin</option>
        </select>
   
     <table class="consultation">

      <tr>
       <th></th>
       <th>Monday </th>
       <th>Tuesday </th>
       <th>Wednesday </th>
       <th>Thursday </th>
       <th>Friday </th>
      </tr>

       <tr>
         <td>09:00-10:00</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>

      <tr>
         <td>10:00-11:00</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>

       <tr>
         <td>13:00-14:00</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>

      <tr>
         <td>15:00-16:00</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>

      <tr>
         <td>16:00-17:00</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
     
				</table>

         <input type="submit" name="book">

				</form>

			</div>
			';
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