<?php
session_start();
require "connection.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" />
        <title> Log in or sign up 🖊🖊</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body>
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 column_1">
                <form method="Post" action="" class="">
                    <h3 style="color: #fff;">Log in here</h3>
<br> <br>
                    <div class="form-group ">
                        <label style="color: #fff;">user id </label>
                        <input class="form-control" style="width: 300px;" type="text" name="user_id" autocomplete="off" autofocus="on" autosave="off" />
                    </div>

                    <div class="form-group">
                        <label style="color: #fff;"> Password </label>
                        <input class="form-control" type="password" name="password_id" autocomplete="off" autofocus="on" autosave="off" />
                    </div>

                    <input class="btn btn-success" type="submit" name="login" value="ENTER" />
                </form>
            </div>

            <div class="col-12 col-md-12 col-lg-6 col-xl-6 column_2 w-50">
                <div class="create_new">
                    <br />
                    <br />

                    <form method="POST" action="">
                        <h3>create new account</h3>
                        <br> <br>


                        <div class="form-group">
                            <label style="color: #000;"> Email </label>
                            <input class="form-control" type="text" name="email" autocomplete="off" autofocus="on" autosave="off" style="width: 300px;" />
                        </div>

                        <div class="form-group">
                            <label style="color: #000;"> Password </label>
                            <input class="form-control" type="password" name="password" autocomplete="off" autofocus="on" autosave="off"/>
                        </div>

                        <input  class="btn btn-danger" type="submit" name="sign_up" value="Enter">

                        <br />
                        <br />

                        <div class="important">
                            our team will send an OTP on your given Emil address
                        </div>
                    </form>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        </div>

<?php

#INSERT DATA

if (isset($_POST['sign_up'])) {

	$_SESSION['email'] = $_POST['email'];
	$_SESSION['sign_pass'] = $_POST['password'];

	$_SESSION['rand'] = rand(0000, 9999);

	$to = $_SESSION['email'];
	$subject = "verify otp ";

	$body = "your one time password otp is $_SESSION[rand]";

	$header = "FROM: divyanshu.8174@gmail.com";

	if (mail($to, $subject, $body, $header)) {
		header("location:otp.php");
	} else {
		echo "mail did'nt send";
	}

	#$hash_password = password_hash($_SESSION['sign_pass'], PASSWORD_BCRYPT);

	#echo $sign_pass;
	#echo $hash_password;

	#$insert = "INSERT INTO `sign_up`(`email`, `password`) VALUES ('$email','$hash_password') ";

	#$query = mysqli_query($conn, $insert);

	#if ($query) {

	#echo "submitted";
	#} else {
	#echo "not submited";}
}

?>

<?php

if (isset($_POST['login'])) {

	$user_id = $_POST['user_id'];
	$password_id = $_POST['password_id'];

	$select = "SELECT * FROM `sign_up` WHERE   email = '$_POST[user_id]'";

	$res = mysqli_query($conn, $select);

	$run = mysqli_num_rows($res);
	if ($run) {

		$fetch = mysqli_fetch_assoc($res);

		$pass = $fetch['password'];

		$verify_pass = password_verify($password_id, $pass);

		if ($verify_pass) {
			?>


            <script>

                    window.open("home.php");

             </script>


            <?php

		}

	} else {
		echo "no data found";
	}

}
?>

    </body>
</html>
