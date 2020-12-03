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
            body {
                background-color: #ddd;
            }
            ::selection {
                background-color: transparent;
            }

            #carouselExampleFade .carousel-inner .carousel-item img {
                height: 150px !important;
                width: 100% !important;
                object-fit: cover !important;
                cursor: pointer;
            }

            .card {
                transition: all 0.5s;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0.75);
                -webkit-box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0.75);
                -moz-box-shadow: 4px 3px 5px 0px rgba(0, 0, 0, 0.75);
            }

            .card-footer .msg {
                border: 1px solid red !important;
                color: red;
            }

            .card-footer .msg:hover {
                border: 1px solid transparent !important;
                background-color: red;
                color: #f6f6f6;
                outline: none !important;
            }

            .upper{display: flex;
                justify-content: space-between;
            }


        </style>
    </head>
    <body>

        <!-- 7718955555 7000000007786185 196625452921 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img src="logo.png" /> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" onkeyup="textsearch()" id="search" />
                    <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-warning btn" href="sell.php">sell here</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link btn btn-warning ml-2" href="post your job.php">
                            post your job
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#jobs">Jobs </a>
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

        <div class="container-fluid">
            <div class="row">
                <?php
$select = "SELECT * FROM `sell`";

$select_query = mysqli_query($conn, $select);
while ($row = mysqli_fetch_assoc($select_query)) {

	?>
                <div class="col col-md-6 col-lg-4 mt-5">
                    <div class="card text-center">
                        <div class="card-header">
                            <?php echo
		$row['product_name']; ?>
                        </div>
                        <div class="card-body">
                            <!--- IMAGES CRAUSEL -->

                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?PHP echo $row['image1']; ?>" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?PHP echo $row['image2']; ?>" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?PHP echo $row['image3']; ?>" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?PHP echo $row['image4']; ?>" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="contact_idea d-flex justify-content-between mt-4">


                                <p class="name" style="position: relative;">
                                    <i class="far fa-user mr-2" style="color: red;"></i>
                                    <?php echo $row['name']; ?>
                                </p>


                                <p class="contact" style="position: relative;">
                                    <i class="fas fa-phone-alt mr-2" style="color: green;"> </i>
                                    <?php echo $row['number']; ?>
                                </p>
                            </div>


                            <div class="upper mt-2">

                                <h6 class="price" style="">
                                    <i class="fas fa-rupee-sign"></i>
                                    <?php echo $row['product_price']; ?>

                                </h6>

                            </div>

                                <strong class="contact text-muted mt-3">
                                    <?php echo $row['location']; ?>
                                </strong>
                                 <form method="POST" action="">

                            <div class="card-footer mt-2">
                                <a href="buy now.php?price=<?php echo $row['product_price']; ?>&type=<?php echo $row['product_name']; ?>&name=<?php echo $row['name']; ?>" class="btn btn-success">Buy Now</a>


                                <a href="add to cart.php?id=<?php echo $row['id']; ?>" class="btn btn-info">  add to cart </a>


                                <a href="message to seller.php?id=<?php echo $row['id']; ?>&number=<?php echo $row['number']; ?>&email=<?php echo $row['email']; ?>" class="btn msg">Message seller</a>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>









        <?php
if (isset($_POST['cart'])) {
		$insert = "INSERT INTO `cart`(`name`, `location`, `number`, `product_name`, `product_type`, `product_price`, `image1`, `image2`, `image3`, `email`) VALUES ('$row[name]','$row[location]','$row[number]','$row[product_name]','$row[product_type]','$row[product_price]','$row[image1]','$row[image2]','$row[image3]','$row[email]')";
		$query = mysqli_query($conn, $insert);
		if ($query) {
			?>

<script> alert("item is added to card") </script>
            <?php
}
	}
}?>


<script>




function textsearch(){

    let x = document.getElementById('search').value;


    let card = document.getElementsByClassName('card');
   // console.log(card.length)

for(let i = 0; i<=card.length ; i++){


     let card_header = document.querySelectorAll('.card-header');
console.log(card_header[i].innerText)

let value = card_header[i].innerText.toUpperCase();

if(value.indexOf(x.toUpperCase()) > -1){
card[i].style.display = "";}
else{
    card[i].style.visibility = "hidden";}

}




}


</script>



<div class="container mt-5">
                    <h4 class="text-uppercase text-center"> JOB DETAILS </h4>

                    <div class="jobs">

                        <?php
$select_jobs = "SELECT * FROM `jobs`";

$select = mysqli_query($conn, $select_jobs);
while ($result = mysqli_fetch_assoc($select)) {

	?>
<div class="jobs mt-3 " id="jobs" style="background-color: #f6f6f6; border-radius: 20px;">
    <div class="detail pt-4 pl-3">
        <h5> <?php echo $result['position'] ?> <span class="text-muted" style="font-size: 20px;">  <?php echo $result['industry']; ?> </span>  </h5>
    </div>

     <div class="work  pl-3">
        <h5> <?php echo "work type : ";
	echo $result['work_type']; ?> </h5>
    </div>

     <div class="emailid d-flex  pl-3">
        <h6> email :   <?php echo $result['Email'];
	echo " " . " " . " " . " " . " " . " " . " , "; ?> contact no :  <?php echo $result['number'];} ?> </h6>

        <a href="#" class="ml-5"> Apply now </a>
    </div>
</div>
                    </div>
</div>



</script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
