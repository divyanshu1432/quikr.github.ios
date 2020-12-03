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
        <link rel="stylesheet" type="text/css" href="home.css" />

        <style>
            table thead th {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img src="logo.png" /> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-warning btn disabled" href="sell.php">sell here</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link btn btn-warning ml-2" href="job.php">
                            post your job
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://divyanshu1432.github.io/divyanshu-portfolio.github.ios/">contact our team</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="add to cart.php"><i class="fas fa-cart-arrow-down"></i> <span> cart </span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="image_sec">
                <table class="table w-100">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <thead>
                            <input type="file" id="img1" name="img1" style="visibility: hidden;" />
                            <th><label for="img1"> Image 1 </label></th>

                            <input type="file" id="img2" name="img2" style="visibility: hidden;" />
                            <th><label for="img2"> Image 2 </label></th>
                        </thead>
                        <thead>
                            <input type="file" id="img3" name="img3" style="visibility: hidden;" />
                            <th><label for="img3"> Image 3 </label></th>
                            <input type="file" id="img4" name="img4" style="visibility: hidden;" />
                            <th><label for="img4"> Image 4 </label></th>
                        </thead>
                        </table>
            </div>


                        <h4 class="text-center">Personal Detaills</h4>

                        <div class="form-group">
                            <label> Seller name </label>
                            <input type="text" class="form-control form-control-sm" name="seller_name" required />
                        </div>

                        <div class="form-group">
                            <label> Seller address </label>
                            <input type="text" class="form-control form-control-sm" name="seller_add" required />
                        </div>

                        <div class="form-group">
                            <label> Seller mobile no </label>
                            <input type="text" class="form-control form-control-sm" name="seller_mob" required />

                             <div class="form-group">
                            <label> Seller email</label>
                            <input type="email" class="form-control form-control-sm" name="seller_mail" required />
                        </div>
                        </div>
                        <br />
                        <br />

                        <h4 class="text-center">product details</h4>

                        <hr />
                        <br />

                        <div class="form-group">
                            <label> product name with Model no </label>
                            <input type="text" class="form-control form-control-sm" name="productname" required />
                        </div>

                        <div class="form-group">
                            <label> product type </label>

                            <select class="form-control" required name="type">
                                <option> select-: </option>

                                <option> Mobile & Tablet </option>
                                <option> Car </option>
                                <option> Bike </option>
                                <option> House </option>
                                <option> Land </option>
                                <option> Clothes </option>
                                <option> Television </option>
                                <option> Refregirator </option>
                                <option> Laptop </option>
                                <option> Cycle </option>
                                <option> other </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> product price </label>
                            <input required name="price" class="form-control" required name="price" />
                        </div>

                        <div class="form-group">
                            <label> Description of product </label>
                            <textarea required name="description" class="form-control" required name="description"> </textarea>
                        </div>
                        <button class="btn btn-success" name="submit" type="submit">Post advertiesment</button>
                    </form>
                    </div>

                    <footer id="education"></footer>

                    <div class="container-fluid mt-5">
                        <h3 class="font-weight-bold text-center"><strong style="border-bottom: 2px solid blue; width: 50%; color: #ff7230;"> Contact </strong></h3>
                        <section id="edcation" class="">
                            <section id="contact" style="padding-top: 50px;">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center flex-column bg-dark">
                                        <p>
                                            <i class="far fa-user mt-3" style="color: #fff;"> <span class="text-light ml-3"> DIVYANSHU MISHRA</span> </i>
                                        </p>

                                        <p>
                                            <i class="fas fa-phone-alt" style="color: #fff;"> <span class="text-light ml-3"> 7985935177 , 7318159864 </span> </i>
                                        </p>

                                        <p>
                                            <i class="far fa-envelope" style="color: #fff;"> <span class="text-light ml-3"> divyanshu.8174@gmail.com</span> </i>
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914546.9852502776!2d79.68365618016935!3d26.44124695092163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47831a987bf3%3A0x53df4d42cef9f8d6!2sKanpur%20Nagar%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1605243440058!5m2!1sen!2sin"
                                            width="100%"
                                            height="100%"
                                            frameborder="0"
                                            allowfullscreen=""
                                            aria-hidden="false"
                                            tabindex="0"
                                        ></iframe>
                                    </div>
                                </div>
                            </section>

                            <!-- CONTACT FINISHED -->

                            <!-- footer started -->
                        </section>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

                    <?php

if (isset($_POST['submit'])) {
	#echo "ok done";

	$productname = $_POST['productname'];
	$type = $_POST['type'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$seller_name = $_POST['seller_name'];
	$seller_add = $_POST['seller_add'];
	$seller_mob = $_POST['seller_mob'];
	$seller_mail = $_POST['seller_mail'];

	if (isset($_FILES['img1'])) {

		$filename1 = $_FILES['img1']['name'];
		$filetmp1 = $_FILES['img1']['tmp_name'];

		$img1 = "images/" . $filename1;
		move_uploaded_file($filetmp1, $img1);

	}
	if ($filename1 == "") {
		?>
                    <script>
                        alert("please select image 1");
                    </script>
                    <?php
}

	if (isset($_FILES['img2'])) {

		$filename2 = $_FILES['img2']['name'];
		$filetmp2 = $_FILES['img2']['tmp_name'];

		$img2 = "images/" . $filename2;
		move_uploaded_file($filetmp2, $img2);

	}if ($filename2 == "") {
		?>
                    <script>
                        alert("please select image 2");
                    </script>
                    <?php
}
	if (isset($_FILES['img3'])) {

		$filename3 = $_FILES['img3']['name'];
		$filetmp3 = $_FILES['img3']['tmp_name'];

		$img3 = "images/" . $filename3;
		move_uploaded_file($filetmp3, $img3);

	}if ($filename3 == "") {
		?>
                    <script>
                        alert("please select image 3");
                    </script>
                    <?php
}

	if (isset($_FILES['img4'])) {

		$filename4 = $_FILES['img4']['name'];
		$filetmp4 = $_FILES['img4']['tmp_name'];

		$img4 = "images/" . $filename4;
		move_uploaded_file($filetmp4, $img4);

	}if ($filename4 == "") {
		?>
                    <script>
                        alert("please select image 4");
                    </script>
                    <?php
}

	$insert = "INSERT INTO `sell`(`name`, `location`, `number`, `product_name`, `product_type`, `product_price`, `description`, `image1`, `image2`, `image3`, `image4`, `email`) VALUES (

'$seller_name','$seller_add','$seller_mob','$productname','$type','$price','$description','$img1','$img2','$img3','$img4','$seller_mail')";

	$run = mysqli_query($conn, $insert);

}

?>


    </body>
</html>
