<?php
require_once '../../../Backend/pdo.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "tpu");

$uid = $_SESSION['uid'];
$sql = " SELECT cart.uid,cart.pid,cart.quantity,cart.paymentstatus,product.productname,product.price FROM cart INNER JOIN product ON cart.pid=product.pid where cart.paymentstatus='Not payed' AND cart.uid='$uid' ORDER BY cart.pid DESC ";
$sql2 = " SELECT * FROM user where uid = '$uid'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$rowcount=mysqli_num_rows($result);

if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	$stmt = $pdo->prepare("DELETE FROM cart WHERE pid=:pid");
	$stmt->execute(array(":pid"=>$id));

	echo'<script>alert("Product has been successfully deleted.")</script>';
	header('Refresh: 0; url=sales-checkout-page.php');
}

if (isset($_POST['total_price'])) {

	$result_select = mysqli_query($conn,$sql);
	$rows = array();
	while($row = mysqli_fetch_array($result_select)){
		$rows[] = $row;
	}
	foreach($rows as $row){
			$quantity = stripslashes($row['quantity']);
			$total_price = stripcslashes($row['quantity']*$row['price']);
			$pid = stripslashes($row['pid']);
			$time = date("Y-m-d");
			$stmt = $conn->prepare("INSERT INTO purchase (uid,pid,quantity,total,time)VALUES('$uid','$pid','$quantity','$total_price','$time')");
			$stmt->execute();
	}

		header("Location: sales-payment-page.php");
		return;
		}

$conn->close();


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Checkout</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="navbar-payment container-fluid">
				<a class="navbar-payment-brand" href="sales-home-page.php">
					<img width="150" src="../assets/SNAPS_PAC.png" alt="SNAPS_PAC.png">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse row" id="navbarSupportedContent">
					<div class="col-sm-3">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Shopping cart</a>
							</li>
						</ul>
					</div>

					<div class="col-sm-9">
						<div class="navbar-payment-link-group">
							<div class="d-flex fx-end">
								<div class="navbar-payment-link">
									<a href="sales-mypurchase-page.php">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
											<path
												d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
										</svg>
										My Purchase
									</a>
								</div>
								<div class="navbar-payment-link">
									<a href="https://www.facebook.com/pacupm/">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
											<path
												d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
											<path
												d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
										</svg>
										Follow us
									</a>
								</div>
								<div class="navbar-payment-link">
									<a href="../../Services/src/services-home-page.php">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
											<path
												d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
										</svg>
										Services</a>
								</div>
								<div class="navbar-payment-link">
									<a href="sales-profile-page.php?profile">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
											<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
											<path fill-rule="evenodd"
												d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
										</svg>
										User</a>
								</div>
							</div>
							<div class="navbar-payment-lang-dropbtn">
								<form class="container-fluid" method="post">
									<input class="navbar-payment-form-control me-2" type="text"
										placeholder="Search for groceries, services, anything">
								</form>
								<div class="btn-group" role="group">
									<button type="button" class="btn dropdown-toggle btn-langs" id="navbarDropdown"
										data-bs-toggle="dropdown" aria-expanded="false">
										EN
									</button>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="#">EN</a></li>
										<li><a class="dropdown-item" href="#">BM</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- Content -->
		<div class="content-address container-fluid">
			<div class="content-address-search container-fluid">
				<?php
					while($rows=$result2->fetch_assoc())
					{
				?>
				<div class="content-address-search-bar row">
					<div class="col-sm-10 d-flex">
						<div class="content-address-selector-title">
							<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
							  <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
							</svg>
							Delivery address</p>
						</div>
						<div class="content-address-selector-user">
							<p><?php echo $rows['username'];?></p>
							<p><?php echo $rows['phone'];?></p>
						</div>
						<div class="content-address-selector-detail">
							<p>No. <?php echo $rows['unit'].", ".$rows['street'].", ".$rows['city'].", ".$rows['postal'].", ".$rows['state'];?></p>
						</div>
					</div>
					<div class="col-sm-2 d-flex">
						<div class="content-address-selector-default">
							<p>Default</p>
						</div>
						<div class="content-address-selector-action">
							<a href="sales-delivery-address-page.php">Change</a>
						</div>
					</div>

				</div>
				<?php
					}
				?>
			</div>
		</div>
<form method="post">
		<div class="cart-content container-fluid">
			<div class="product-table-panel container-fluid">
				<div class="product-table-index d-flex">
					<div class="product-table-index-la">
						<p>Product</p>
					</div>
					<div class="product-table-index-sm">
						<p>Unit price</p>
					</div>
					<div class="product-table-index-sm">
						<p>Quantity</p>
					</div>
					<div class="product-table-index-sm">
						<p>Total price</p>
					</div>
					<div class="product-table-index-sm">
						<p>Actions</p>
					</div>
				</div>

				<?php
					$grand_total = 0;
					while($rows=$result->fetch_assoc())
					{
				?>
				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p><?php echo $rows['productname'];?></p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM <?php echo $rows['price'];?></p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p><?php echo $rows['quantity'];?></p>

					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<?php $total_price = $rows['quantity'] * $rows['price']?>
						<p>RM <?php echo $total_price?></p>
						<input name="total_price" type="hidden">
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<br><br><br>
						<a href="sales-checkout-page.php?delete=<?php echo $rows["pid"];?>" onClick="return confirm('Are you sure you want to remove this product?');">Delete</a>
					</div>
				</div>
				<?php
					$grand_total += $total_price;
					 $_SESSION['grand_total'] = $grand_total;
					}
				?>

				<div class="product-table-total">
				<div class="row">
					<div class="col-sm-6">

					</div>
					<!-- <div class="col-sm-3">
						<div class="product-table-total-sub">
							<p>Merchandise Subtotal:   RM91.90</p>
							<p>Shopping total:   RM5.00</p>
						</div>
					</div> -->
					<div class="col-sm-3">

					</div>
				</div>

					<div class="row">
						<div class="col-sm-6">
						</div>
						<div class="col-sm-3">
							<div class="product-table-total-sum">
								<p>Total (<?php echo $rowcount;?> items):
									<span class="total-money">RM <?php echo $grand_total;?></span>
								</p>
							</div>
						</div>

						<div class="col-sm-3">
							<button type="submit" class="shopping-option-p">Place order</button>
						</div>

					</div>

				</div>
			</div>
		</div>
</form>
		<!-- Footer -->
		<footer class="sales-footer container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<div class="footer-contact-title">
						<p>Contact us</p>
					</div>
					<div class="footer-org-name">
						<p>Pusat Pertanian Universiti</p>
					</div>
					<div class="footer-addr">
						<p>Universiti Putra Malaysia</p>
						<p>43400 UPM Serdang</p>
						<p>Selangor Darul Ehsan</p>
					</div>
					<div class="footer-tele">
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-telephone" viewBox="0 0 16 16">
								<path
									d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
							</svg>

							+603 9769 7282/7301
						</p>
					</div>
					<div class="footer-fax">
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-printer-fill" viewBox="0 0 16 16">
								<path
									d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
								<path
									d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
							</svg>

							+603 8942 4076
						</p>
					</div>
					<div class="footer-email">
						<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-envelope" viewBox="0 0 16 16">
								<path
									d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
							</svg>

							dir.tpu@upm.edu.my
						</p>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="footer-logo-groups">
						<img width="200" src="../assets/csit_logo.png">
						<img width="200" src="../assets/upm_logo_horizontal.png">
						<img width="200" src="../assets/SNAPS_PAC.png">
					</div>
				</div>
				<div class="col-sm-2">

				</div>
			</div>
		</footer>

	</body>
</html>
