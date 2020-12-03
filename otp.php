<?php
session_start();
#echo $_SESSION['email'];
#echo $_SESSION['sign_pass'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" />
        <title>verify your email</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

        <style>
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
            }

            .main_div {
                background-color: #bdc3c7;
                width: 100vw;
                height: 100vh;
                display: grid;
                place-items: center;
            }

            .center_div {
                width: 50vw;
                height: 50vh;
                border: 2px solid blue;
                border-radius: 25px;
                background-color: #576574;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            @media (max-width: 991px) {
                .center_div {
                    width: 100vw;
                    height: 50vh;
                    border: 2px solid blue;
                    border-radius: 25px;
                    background-color: #576574;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }
        </style>
    </head>
    <body>
        <div class="main_div">
            <h4>verify your email</h4>
            <div class="center_div">
                <form method="post" action="">
                    <h4 style="color: #fff;">Enter Otp</h4>
                    <br />
                    <br />
                    <div class="form-group">
                        <input type="text" name="otp" class="form-control form-control-sm" placeholder="Drop your otp" />
                    </div>
                    <button class="btn btn-success btn-sm" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <?php

if (isset($_POST['submit'])) {

	require "connection.php";

	if ($_POST['otp'] == $_SESSION['rand']) {

		$hash_password = password_hash($_SESSION['sign_pass'], PASSWORD_BCRYPT);

		$insert = "INSERT INTO `sign_up`(`email`, `password`) VALUES ('$_SESSION[email]','$hash_password') ";

		$query = mysqli_query($conn, $insert);

		if ($query) {

			echo "submitted";
		} else {
			echo "not submited";}

	} else {
		?>
<script> alert("please enter correct otp")</script>
<?php	}
}
?>
    </body>
</html>