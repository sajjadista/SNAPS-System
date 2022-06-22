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
	
	if ( $row === false ) {
		$_SESSION['error'] = 'Bad value for product id';
		header( 'Location: admin-product.php' ) ;
		return;
	}
	
	 if (isset($_POST['productname']) && isset($_POST['price']) && isset($_POST['quantity'])
		&& isset($_POST['availability']) && isset($_POST['description']) && isset($_POST['sold']) && isset($_POST['clicks']) && isset($_POST['favorites']) && isset($_POST['stat'])
		&& isset($_POST['payment'])) {
			
			if (strlen($_POST['productname']) < 1) {
            $_SESSION['error'] = "Name missing";
            header("Location: edit-product.php");
            return;
        }  else if (strlen($_POST['price']) < 1) {
            $_SESSION['error'] = "Price missing";
            header("Location: edit-product.php");
            return;
        } else if (strlen($_POST['quantity']) < 1) {
            $_SESSION['error'] = "Quantity missing";
            header("Location: edit-product.php");
            return;
        } else if (strlen($_POST['availability']) < 1) {
            $_SESSION['error'] = "Availability missing";
            header("Location: edit-product.php");
            return;
        } else if (strlen($_POST['description']) < 1) {
            $_SESSION['error'] = "Description missing";
            header("Location: edit-product.php");
            return;
		} else if (!is_numeric($_POST['price'])) {
            $_SESSION['error'] = "Price must be numbers";
            header("Location: edit-product.php");
            return;
        } else if (strlen($_POST['stat']) < 1) {
            $_SESSION['error'] = "Status missing";
            header("Location: edit-product.php");
            return;
        } else if (strlen($_POST['payment']) < 1) {
            $_SESSION['error'] = "Payment missing";
            header("Location: edit-product.php");
            return;
        } else {
			if($_FILES['picture']['size']==0){
				$picProfile=$picture;
			} else{
				$name=$_POST['productname'];

				$images=$_FILES['picture']['name'];
				$tmp_dir=$_FILES['picture']['tmp_name'];
				$imageSize=$_FILES['picture']['size'];

				$upload_dir='uploads/';
				$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
				$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
				$picProfile=rand(1000, 1000000).".".$imgExt;
				move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
			}
			
			$sql = "UPDATE product SET productname = :productname, price = :price, quantity = :quantity, availability = :availability, description = :description, 
			sold = :sold, clicks = :clicks, favorites = :favorites, picture = :productpic,  stat= :stat,  
			payment = :payment, adminproductid = :aid WHERE pid = :pid";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
				':productname' => htmlentities($_POST['productname']),
				':price' => htmlentities($_POST['price']),
				':quantity' => htmlentities($_POST['quantity']),
				':availability' => htmlentities($_POST['availability']),
				':description' => htmlentities($_POST['description']),
				':sold' => htmlentities($_POST['sold']),
				':clicks' => htmlentities($_POST['clicks']),
				':favorites' => htmlentities($_POST['favorites']),
				':productpic' => htmlentities($picProfile),
				':stat' => htmlentities($_POST['stat']),
				':payment' => htmlentities($_POST['payment']),
				':pid' => $productid,
				':aid' => 1,
            ));
        $_SESSION['error'] = 'Record edited';
        header( 'Location: edit-product.php' ) ;
        return;
        }
		}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product | SNAPS Admin Portal</title>
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
		
		<h2 style="text-align: center;">Edit Product Details</h2>
		<?php
								  if ( isset($_SESSION['error']) ) {
									 echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
									 unset($_SESSION['error']);
								  }
				?>
		
		
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
                    <label class="label-theme" for="upload-picture">Upload product picture:</label>

                </div>

                <div class="col-6 d-flex justify-content-center">
					<input type="file" name="picture" id="picture" accept="*/image"/> 
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
                   <div class="col d-flex justify-content-center">
                    <select class="textfield-theme" name="availability" id="availability">
                        <option value="In-store">In Store</option>
                        <option value="Online">Online</option>
                    </select>

                </div>
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
                    <select class="textfield-theme" name="payment" id="payment">
                        <option value="In-store">Pay in Store</option>
                        <option value="Online">Online Payment</option>
                    </select>
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
                    <select class="textfield-theme" name="stat" id="stat">
                        <option value="View">View</option>
                        <option value="Hidden">Hidden</option>
                    </select>
                </div>

            </div>

            <div class="row my-3">
                <div class="col d-flex justify-content-center">
					<input type="submit" class="button-theme" value="Save Details"/>
                </div>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<script>  
 $(document).ready(function(){  
      $('#Register').click(function(){  
           var image_name = $('#dlogo').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#dlogo').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#dlogo').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  