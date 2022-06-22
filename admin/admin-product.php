<?php
	session_start();
    require_once "pdo.php";
	
    $stmt = $pdo->query("SELECT * FROM product;");
	 
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html class="fs-4" lang="en">

<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Main Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
.bs-icon {
  --bs-icon-size: .75rem;
  display: flex;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
  font-size: var(--bs-icon-size);
  width: calc(var(--bs-icon-size) * 2);
  height: calc(var(--bs-icon-size) * 2);
  color: var(--bs-primary);
}

.bs-icon-xs {
  --bs-icon-size: 1rem;
  width: calc(var(--bs-icon-size) * 1.5);
  height: calc(var(--bs-icon-size) * 1.5);
}

.bs-icon-sm {
  --bs-icon-size: 2.5rem;
}

.bs-icon-md {
  --bs-icon-size: 1.5rem;
}

.bs-icon-lg {
  --bs-icon-size: 2rem;
}

.bs-icon-xl {
  --bs-icon-size: 2.5rem;
}

.bs-icon.bs-icon-primary {
  color: var(--bs-white);
  background: url("../../assets/img/LOGO%20TPU.jpg");
  background-size: contain;
}

.bs-icon.bs-icon-primary-light {
  color: var(--bs-primary);
  background: rgba(var(--bs-primary-rgb), .2);
}

.bs-icon.bs-icon-semi-white {
  color: var(--bs-primary);
  background: rgba(255, 255, 255, .5);
}

.bs-icon.bs-icon-rounded {
  border-radius: .5rem;
}

.bs-icon.bs-icon-circle {
  border-radius: 50%;
}

.navbar {
  box-shadow: 0 6px 7px 1px gray;
}

.row{
	text-align:center;
}

.btn{
	margin: 2px;
}

.card-body {
  max-width: 300px;
  max-height: 600px;
}

.card {
  margin-top: 0;
  max-width: 150px;
  height: 200px;
}

#titleAdd {
  position: relative;
  bottom: 0;
}

#container_fluid {
  background-color: #206023;
  margin-top: 0;
  height: 800px;
}

#snaps_logo {
  position: relative;
}

#Admin_title {
  padding-top: 50px;
}

#container_category {
  background-color: #206023;
  margin-bottom: -20px;
  padding-top: 20px;
}

#col {
  min-width: 200px;
  padding-bottom: 20px;
  padding-top: 20px;
}

row-1 {
  margin-top: 20px;
}

#category_card {
  max-width: 800px;
  padding-top: 30px;
}

#addproduct {
  bottom: 0px;
  text-align: center;
}

.card {
  width: 200px;
  max-width: 220px;
}

.card-body {
  width: 200px;
  max-width: 200px;
}

#addbutton {
}

#category-card {
  padding-top: 30px;
  max-width: 2000px;
  width: 1500px;
}

#container_fluid {
  padding-top: 50px;
}

.navbar-brand {
  margin-right: auto;
}
</style>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container-fluid"><img src="assets/snapslogo.png" width="100" style="width: 112px;">
            <h1 style="color: var(--bs-green);width: 481.513px;height: 21.425px;font-size: 26.022px;text-align: center;"><strong>Admin / Product page</strong></h1>
			<a href="#" class="btn btn-primary btn-sm" role="button" style="margin: 1px;">Add product</a>
        </div>
    </nav>
    
	<div class="container fluid">
			<?php
								  if ( isset($_SESSION['error']) ) {
									 echo('<p style="color: red; text-align: center;">'.htmlentities($_SESSION['error'])."</p>\n");
									 unset($_SESSION['error']);
								  }
			?>
			<?php
					//this is to get the logo/pic from database
					//<?php echo(htmlentities($_SESSION["dlogo"])) 
					
					//to get all of the images in database
						echo('<div class="row">');
						foreach ($rows as $row) {
								
									echo('<div class="col-sm-4">');
											echo('<a href="edit-product.php?pid='.$row['pid'].'">');
												echo('<div class="container p-3 my-3 bg-light">');
													echo('<img src="uploads/');
													echo($row['picture']);
													echo('" class="picture" height="200px" width="200px">');
													echo('<p>Name: ');
													echo($row['productname']);
													echo('</p>');
													echo('<a href="product-details.php?pid='.$row['pid'].'" class="btn btn-primary btn-sm" role="button">Details</a>');
													echo('<a href="edit-product.php?pid='.$row['pid'].'" class="btn btn-warning btn-sm" role="button">Edit</a>');
													echo('<a href="delete-product.php?pid='.$row['pid'].'" class="btn btn-danger btn-sm" role="button">Delete</a>');
												echo('</div>');
											echo('</a>');
									echo('</div>');
						
						}
						echo('</div>');
					
					
				echo('</div>');
				
				?>
				
				
			
			</div>
	
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
</body>

</html>