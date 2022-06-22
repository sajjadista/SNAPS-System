<?php
require_once "pdo.php";
session_start();

//to check if admin is legit or not
//if ( ! isset($_SESSION['aid']) ) {
//		  $_SESSION['error'] = "Missing admin id";
//		  session_destroy();
//		  header('Location: admin-login.php');
//		  return;
//	}

//to check there's input or not

$aid = $_SESSION['aid'];

if(isset($_POST['insert'])){
	
	if (strlen($_POST['productname']) < 1) {
            $_SESSION['error'] = "Name missing";
            header("Location: add-product.php");
            return;
    } else if (strlen($_POST['productprice']) < 1) {
            $_SESSION['error'] = "Price missing";
            header("Location: add-product.php");
            return;
    } else if (strlen($_POST['description']) < 1) {
            $_SESSION['error'] = "Description missing";
            header("Location: add-product.php");
            return;
	} else if (strlen($_POST['quantity']) < 1) {
            $_SESSION['error'] = "Quantity missing";
            header("Location: add-product.php");
            return;
	} else {
		
		//for product picture
		$name=$_POST['product-name'];
				
				$images=$_FILES['product-pic']['name'];
				$tmp_dir=$_FILES['product-pic']['tmp_name'];
				$imageSize=$_FILES['product-pic']['size'];
				
				$upload_dir='uploads/';
				$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
				$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
				$picProfile=rand(1000, 1000000).".".$imgExt;
				$pcode=rand(1,10)*12*rand(1,123).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90));
				move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
		
		$stmt = $pdo->prepare('INSERT INTO product(productname, price, quantity, availability, description, sold, clicks, favorites, picture, stat, payment, adminproductid) 
		VALUES (:productname, :productprice, :quantity, :availability, :description, :sold, :clicks, :favorites, :productpic, :stat, :payment, :adminproductid)');
				
		$stmt->execute(array(
                ':productname' => htmlentities($_POST['productname']),
				':productprice' => htmlentities($_POST['productprice']),
				':quantity' => htmlentities($_POST['quantity']),
				':availability' => htmlentities($_POST['availability']),
				':description' => htmlentities($_POST['description']),
				':sold' => 0,
				':clicks' => 0,
				':favorites' => 0,
				':productpic' => htmlentities($picProfile),
				':stat' => "View",
				':payment' => htmlentities($_POST['payment']),
				':adminproductid' => 1,
		));
		
		$_SESSION['success'] = "Product added";
            header("Location: add-product.php");
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
    <title>Add Product | SNAPS Admin Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

	<?php 
			if ( isset($_SESSION['error']) ) {
					echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
					unset($_SESSION['error']);
			}else if ( isset($_SESSION['success']) ) {
					echo('<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n");
					unset($_SESSION['success']);
			}
	?>

    <div class="container panel center-screen add-product py-4 px-3">

        <div class="row my-3">
            <div class="col d-flex justify-content-center">
                <h2>Add Product Details</h2>
            </div>
        </div>
        <hr class="section-divider">


        <form method="post" enctype="multipart/form-data">

            <div class="row my-3">
                <div class="col-6 d-flex justify-content-center">
                    <label for="upload-picture">Upload product picture:</label>
						
                </div>
            </div>
			
			<div class="row-my-3">
					 <div class="col d-flex justify-content-center">
							<input type="file" name="productpic" id="productpic" accept="*/image" /> 
					</div>
			</div>


            <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="productname" id="productname" placeholder="Product Name">
                </div>

            </div>

            <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="productprice" id="productprice" placeholder="Product Price">
                </div>

            </div>
			
			 <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme"  type="text" name="quantity" id="quantity" placeholder="Quantity"></input>
                </div>

            </div>

            <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <textarea class="textarea-theme" name="description" id="description" placeholder="Description" cols="40" rows="5"></textarea>
                </div>

            </div>

            <div class="row my-3">
                <div class="col-6 d-flex justify-content-center">
                    <label for="Availability">Available:</label>
						
                </div>
            </div>
			
            <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <select class="textfield-theme" name="availability" id="availability">
                        <option value="In-store">In Store</option>
                        <option value="Online">Online</option>
                    </select>

                </div>

            </div>
			
            <div class="row my-3">
                <div class="col-6 d-flex justify-content-center">
                    <label for="Payment">Payment type:</label>
						
                </div>
            </div>
			
			 <div class="row my-3">

                <div class="col d-flex justify-content-center">

                    <select class="textfield-theme" name="payment" id="payment">
                        <option value="In-store">Pay in Store</option>
                        <option value="Online">Online Payment</option>
                    </select>

                </div>

            </div>

            <div class="row my-3">

                <div class="col d-flex justify-content-center">
                    <input type="submit" name="insert" class="button-theme" value="Add Product">
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