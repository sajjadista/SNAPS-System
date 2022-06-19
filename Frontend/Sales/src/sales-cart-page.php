<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Shopping cart</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
				integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
				crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!--bootstrap cdn-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
				crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
	.cards {
 display: flex;
 justify-content: space-between;
}
	</style>
	<body>

		<!-- Navbar -->
		<nav class="navbar navbar-light navbar-expand-md just">
			<div class="container-fluid">
					<div class="col-md-2 d-flex justify-content-center">
							<img src="../assets/upm_logo_vertical.png" height="100" />
					</div>
					<div class="col">
							<div class="row">
									<div class="col">
											<a class="navbar-brand justify-content-center" href="sales-home-page.php">
													<img src="../assets/SNAPS_PAC.png" height="70" />
											</a>
									</div>
									<div class="col">
											<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
													data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
													aria-expanded="false" aria-label="Toggle navigation">
													<span class="navbar-toggler-icon"></span>
											</button>
											<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
													<ul class="navbar-nav">
															<li class="nav-item">
																	<a class="nav-link active" href="https://www.facebook.com/pacupm/"><svg class="nav-icon"
																					xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
																					height="1em" fill="currentColor">
																					<!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
																					<path
																							d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z">
																					</path>
																			</svg><svg class="nav-icon" xmlns="http://www.w3.org/2000/svg"
																					viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
																					<!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
																					<path
																							d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z">
																					</path>
																			</svg>
																			<span class="nav-text">Follow us</span> </a><a class="nav-link"
																			href="#"></a>
															</li>

															<li class="nav-item">
																	<a class="nav-link active" href="sales-mypurchase-page.php">
																			<i class="fas fa-shopping-bag nav-icon"></i> <span class="nav-text">My
																					Purchase</span>
																	</a>
															</li>
															<li class="nav-item">
																	<a class="nav-link active" href="../../Services/src/services-home-page.php">
																			<i class="fas fa-hands-helping nav-icon"></i> <span class="nav-text">
																					Services</span>
																	</a>
															</li>
															<li class="nav-item">
																	<a class="nav-link active" href="sales-profile-page.php?profile">
																			<i class="fas fa-user-circle nav-icon"></i> <span class="nav-text">
																					Profile</span>
																	</a>
															</li>
															<li class="nav-item">
																	<a class="nav-link active" href="sales-login-page.php">
																			<i class="fas fa-sign-out nav-icon"></i> <span class="nav-text">
																					Logout</span>
																	</a>
															</li>
													</ul>
											</div>
									</div>
							</div>

							<div class="row">
									<div class="col-md-10">
											<form class="form-inline md-form form-lg mt-0 pt-1">
													<input class="form-control form-control-md ml-3 w-100" type="text"
															placeholder="🔎 Search for groceries, services, anything" aria-label="Search" />
											</form>
											<p class="tagline text-center pt-1">
													Bringing freshness closer to you!
											</p>
									</div>
									<div class="col-md-2 d-flex justify-content-center">
											<div class="row">
													<div class="col">
														<a class="nav-link active" href="sales-checkout-page.php">
															<i class="fa fa-shopping-cart" aria-hidden="true"></i>
													</div>
													<div class="col">
															<div class="dropdown">
																	<button class="btn btn-secondary dropdown-toggle" type="button"
																			id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
																			EN
																	</button>
																	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
																			<li><a class="dropdown-item" href="#">BM</a></li>
																	</ul>
															</div>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
		</nav>

		<!-- Content -->
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
				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p>Hot sauce anchovies</p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM12.20</p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>2</p>
					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<p>RM24.40</p>
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<p><a href="">Delete</a></p>
					</div>
				</div>

				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p>Hot sauce anchovies</p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM12.20</p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>2</p>
					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<p>RM24.40</p>
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<p><a href="">Delete</a></p>
					</div>
				</div>

				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p>Hot sauce anchovies</p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM12.20</p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>2</p>
					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<p>RM24.40</p>
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<p><a href="">Delete</a></p>
					</div>
				</div>

				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p>Hot sauce anchovies</p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM12.20</p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>2</p>
					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<p>RM24.40</p>
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<p><a href="">Delete</a></p>
					</div>
				</div>

				<div class="product-table-item d-flex">
					<div class="product-table-index-la">
						<div class="product-table-card d-flex">
							<div class="product-table-card-img">
								<img width="100%" src="../assets/product_img1.png" >
							</div>
							<div class="product-table-card-info">
								<div class="product-table-card-info-title">
									<p>Hot sauce anchovies</p>
								</div>
								<div class="product-table-card-info-tag">
									<span class="badge badge-light">Local Seller</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>RM12.20</p>
					</div>
					<div class="product-table-card-info-text product-table-index-sm">
						<p>2</p>
					</div>
					<div class="product-table-card-info-text-deep product-table-index-sm">
						<p>RM24.40</p>
					</div>
					<div class="product-table-card-info-action product-table-index-sm">
						<p><a href="">Delete</a></p>
					</div>
				</div>
				<div class="product-table-total">
					<div class="row">
						<div class="col-sm-6">

						</div>
						<div class="col-sm-3">
							<div class="product-table-total-sum">
								<p>Shopping option</p>
								<p>Total (5 items):
									<span class="total-money">RM91.90</span>
								</p>
							</div>
						</div>
						<div class="col-sm-3">
							<button type="button" class="shopping-option-d">Delivery</button>
							<button type="button" class="shopping-option-p">Place order</button>
						</div>
					</div>
				</div>
			</div>
		</div>

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
