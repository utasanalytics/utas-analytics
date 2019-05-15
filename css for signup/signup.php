
    <main>
        <link rel="stylesheet" type="text/css" href="signup.css">
		<!-- The main section for Home-->
		<div class="main home">
            <section>
                <h1>Signup</h1>
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
                <form class="sign" action="includes/signup.inc.php" method="post">
                    <input name="uid" type="text" placeholder="Username"><br><br>
                    <input name="mail" type="e-mail" placeholder="E-mail"><br><br>
                    <input name="pwd" type="password" placeholder="Password"><br><br>
                    <input name="pwd-repeat" type="password" placeholder="Repeat password"><br><br>
                    <button name="signup-submit" type="submit">Signup</button>
                </form>
			</section>
		</div>
    </main>
