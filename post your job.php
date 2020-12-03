<?php
session_start();
require "connection.php";

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

</head>
<body style="background-color: #dfe6e9;">


<div class="container d-flex justify-content-center align-items-center mt-5" style="background-color: #fff;
border-radius: 20px;">
<form class="form w-75 mt-5 mb-3" method="POST" action="" style="" >

<div class="form-group">
<label> Industry name </label>
<input type="text" name="industry" class="form-control" placeholder="Industry name">
</div>


<div class="form-group">
<label> Post name </label>
<input type="text" name="Post" class="form-control" placeholder="Work Position ">
</div>


<div class="form-group">
<label> Work type </label>
<input type="text" name="work_type" class="form-control" placeholder="Explain about work">
</div>


<div class="form-group">
<label> Official Email </label>
<input type="text" name="email" class="form-control" placeholder="Emailabc@gmail.com">
</div>


<div class="form-group">
<label>  Contact no.. </label>
<input type="text" name="number" class="form-control" placeholder="*********">
</div>

<div class="form-group">
<input type="submit" name="submit" class="btn btn-block btn-danger" value="Post" >
</div>




</form>
<?php
if (isset($_POST['submit'])) {
	$industry = $_POST['industry'];

	$post = $_POST['Post'];
	$work_type = $_POST['work_type'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	$insert = " INSERT INTO `jobs`(`industry`, `position`, `work_type`, `Email`, `number`) VALUES ('$industry','$post','$work_type','$email','$number') ";
	$res = mysqli_query($conn, $insert);}?>


</body>
</html>