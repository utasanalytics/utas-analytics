<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<!--Insert Your CSS include statement here-->

<!--the section for user profile-->
   <div class="main user">
   
   <!--the content for user profile-->
      <div class="content user">
                
                <div class="container user">
                    <form>
                        <h2>Edit My User Profile</h2>
                        <input type="radio" name="bict" value="BICT">BICT
                        <input type="radio" name="mits" value="MITS">MITS
                    </form>
                </div>
                <!-- the information for profile -->
				    <div class="info">
                   <form>
						   <label>Nickname: </label><input type="text" name="nickname"><br>
                     <label>Location: </label><input type="text" name="location">
                   </form>
               
                </div>
               <!-- social for profile -->
                <div class="social">
                   <form>
                      <h3>Social Networks</h3>
                      <label>Facebook: </label><input type="text" name="facebook">
                      <label>Twitter: </label><input type="text" name="twitter">
                   </form>
                  </div>
       </div>

    </div>




   




<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>