<?php
session_start();
require "connection.php";

if (isset($_POST['submit'])) {

	$email = $_GET['email'];
	$buyer_name = $_POST['name'];
	$buyer_number = $_POST['num'];
	$message = $_POST['msg'];

	$to = $_GET['email'];
	$subject = "message from buyer";

	$body = " $message " . " " . "" . "" . "" . "" . "costumer name  =  $buyer_name " . "costumer number = $buyer_number";

	$header = "FROM: divyanshu.8174@gmail.com";

	if (mail($to, $subject, $body, $header)) {
		echo " mail sent";
	} else {
		echo "mail did'nt send";

	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width , initial-scale=1.0" />
        <title>Quikr</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous"
        />



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>


    <div class="container mt-5">
        <h4 class="text-center"> Drop your message to seller  </h4>

    <div class="contain">

<hr>
<br>

<form class="form w-75 ml-5" method="POST" action="">
    <div class="form-group">
        <label> seller contact no  </label>
        <input type="text" name="" value="<?php echo $_GET['number'] ?>" disabled>
    </div>

    <div class="form-group">
        <label> seller email  </label>
        <input type="text" name="" value="<?php echo $_GET['email'] ?>" disabled>
    </div>

     <div class="form-group">
        <label> Buyer name  </label>
        <input type="text" name="name" value="" >
    </div>


    <div class="form-group">
        <label> Buyer number  </label>
        <input type="text" name="num" value="" >
    </div>

      <div class="form-group">
        <label> Your message  </label>
<textarea name="msg">  </textarea>
    </div>


    <input type="submit" class="btn btn-success btn-block" name="submit" value="send">



</form> </div>

<script>

$(document).ready(function(){
    $('textarea').addClass('form-control')

$('input').addClass('form-control')


})



</script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<?php
?>
        </body>
        </html>
