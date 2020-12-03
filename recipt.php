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

        <style>
            .main_div {
                display: grid;
                place-items: center;
            }
        </style>
    </head>
    <body class="">
        <div class="main_div" style="width: 100vw; height: 100vh;">
        	<form method="GET" action="">
            <div class="recipt" style="width: 30vw; height: auto; border: 1px solid #333; padding: 20px; border-radius: 20px;">
                <h5 style="font-size: 25px;" class="text-center text-uppercase">Order details</h5>
                <hr>

                <div class="type mt-5 d-flex justify-content-around">
                    <p class="text-muted">Order Type</p>
                    <p><?php echo $_GET['type']; ?></p>
                </div>


                 <div class="type d-flex justify-content-around">
                    <p class="text-muted">Order id</p>
                    <p><?php $_GET['x'] = "qkr" . rand(000, 999) . "ois";
echo $_GET['x'];?>
</p>
                </div>

                <div class="type d-flex justify-content-around">
                    <p class="text-muted">Paid price</p>
                    <p><?php echo $_GET['price']; ?></p>
                </div>

                <div class="type d-flex justify-content-around">
                    <p class="text-muted">Order date</p>
                    <p><?php $_GET['date'] = date('Y/m/d');
echo $_GET['date'];?></p>
                </div>

                <div class="type d-flex justify-content-around">
                    <p class="text-muted">Seller name</p>
                    <p><?php echo $_GET['name']; ?></p>
                </div>

                <a href="#" onclick="window.print()"> print reciept </a>
            </div>
        </form>
        </div>

        	<?php
$seller = $_GET['name'];
$date = $_GET['date'];
$price = $_GET['price'];
$order_id = $_GET['x'];
$type = $_GET['type'];

$insert = "INSERT INTO `order_table`(`type`, `price`, `order_id`, `order_date`, `seller`) VALUES ('$type','$price','$order_id','$date','$seller')";
$run = mysqli_query($conn, $insert);

$select = "SELECT * FROM `sell`";

$select_query = mysqli_query($conn, $select);
while ($row = mysqli_fetch_assoc($select_query)) {

	$to = $row['email'];}
$subject = " quikr product sell ";

$body = " your product $type has been sold out and your money $price has been recieved by our organisation contact us on 7985935177 for your payment get in your BANK ACCOUNT     THANK YOU  from quikr";

$header = "FROM: divyanshu.8174@gmail.com";

if (mail($to, $subject, $body, $header)) {
	echo " mail sent  ";
} else {
	echo "mail did'nt send";
}

?>





    </body>
</html>
