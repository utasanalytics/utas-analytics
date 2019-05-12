<!--Contains basic starting html code-->
<?php include("Headers/header.php");?>
<div class="body-container">

<!-- The content for the Home section  -->
    <div class="content-container">

        <div class="content-header">
           <h1>BICT/MITS HELP SITE</h1>
        </div>

        <div class="content-body">
            <form action="includes/signup.inc.php" method="post">
                <input name="uid" type="text" placeholder="Username">
                <input name="mail" type="text" placeholder="E-mail">
                <input name="pwd" type="password" placeholder="Password">
                <input name="pwd-repeat" type="password" placeholder="Repeat password">
                <button name="signup-submit" type="submit">Signup</button>
            </form>
        </div>

        <div class="content-message">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username/e-mail!</p>';
                }
                else if ($_GET['error'] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if ($_GET['error'] == "invalidmail") {
                    echo '<p class="signuperror">Invalid E-mail!</p>';
                }
                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }
                else if ($_GET['error'] == "usertaken") {
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
            }
            else if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess">Signup successful!</p>';
            }
            ?>
        </div>
    </div>
</div>
<!--Contains closing tags for body and html-->
<?php include("Footers/footer.php");?>