<?php
require_once "pdo.php";
session_start();

$_SESSION['pid'] = $_GET['pid'];
$productid = $_GET['pid'];

// make sure product id is there or not
	if ( ! isset($productid) ) {
	  $_SESSION['error'] = " ";
	  header('Location: admin-product.php');
	  return;
	}
	
	$stmt = $pdo->prepare("SELECT * FROM product where pid = :pid");
	$stmt->execute(array(":pid" => $productid));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$picture = htmlentities($row['picture']);
	$productname= htmlentities($row['productname']);
	$price = htmlentities($row['price']);
	$quantity = htmlentities($row['quantity']);
	$availability = htmlentities($row['availability']);
	$description = htmlentities($row['description']);
	$sold= htmlentities($row['sold']);
	$clicks = htmlentities($row['clicks']);
	$favorites = htmlentities($row['favorites']);
	$stat = htmlentities($row['stat']);
	$payment = htmlentities($row['payment']);
	$pid = $productid;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | SNAPS Admin Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>

    <div class="container panel center-screen add-product py-4 px-3">
		
        <!-- idk what this is but it if this is not here then the edit product details will not be displayed??? --->
        <hr class="section-divider">
		<div class="row my-3" style="padding: 100px;">
            <div class="col d-flex justify-content-center">
                
            </div>
        </div>
		
		<h2 style="text-align: center;">Product Details</h2>
		
		
        <form method="post" enctype="multipart/form-data">
		
            <div class="row my-3">
                <div class="col d-flex justify-content-center">
				<?php
								echo('<img src="uploads/');
								echo($row['picture']);
								echo('" class="complogo" height="200px" width="200px">');
				?>
                </div>
            </div>

            <div class="row mt-3 mb-4">
                <div class="col-6 d-flex justify-content-center">
                    <label class="label-theme" for="upload-picture">Product picture:</label>

                </div>
            </div>


            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Product name:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="productname" id="productname" value="<?= $productname?>">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Product price:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="price" id="price" value="<?= $price?>">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Quantity:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="quantity" id="quantity" value="<?= $quantity?>">
                </div>
            </div>
			
			<div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Availability:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                  <input class="textfield-theme" type="text" name="availability" id="availability" value="<?= $availability?>">
                </div>
            </div>

            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Description:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <textarea class="textarea-theme" name="description" id="description" cols="40" rows="5"><?= $description?></textarea>
                </div>
            </div>

            <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Payment method:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                  <input class="textfield-theme" type="text" name="payment" id="payment" value="<?= $payment?>">
                </div>
            </div>
			
			<div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Sold:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="sold" id="sold" value="<?= $sold?>">
                </div>
            </div>
			
			<div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Clicks:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="clicks" id="clicks" value="<?= $clicks?>">
                </div>
            </div>
			
			<div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Favorites:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="favorites" id="favorites" value="<?= $favorites?>">
                </div>
            </div>
			
			<div class="row mb-1">
                <div class="col d-flex justify-content-center">
                    <label class="label-theme">Status:</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                  <input class="textfield-theme" type="text" name="stat" id="stat" value="<?= $stat?>">
                </div>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>