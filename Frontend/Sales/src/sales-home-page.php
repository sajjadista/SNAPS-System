<?php
require_once '../../../Backend/pdo.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "tpu");

$sql = " SELECT * FROM product where stat='View' ORDER BY pid DESC ";
$result = $conn->query($sql);


if ( isset($_GET['Fruits'])) {

  $sql = " SELECT * FROM product where stat='View' and category='Fruits' ORDER BY pid DESC ";
  $result = $conn->query($sql);

}

if ( isset($_GET['Vegetables'])) {

  $sql = " SELECT * FROM product where stat='View' and category='Vegetables' ORDER BY pid DESC ";
  $result = $conn->query($sql);

}
if ( isset($_GET['Groceries'])) {

  $sql = " SELECT * FROM product where stat='View' and category='Groceries' ORDER BY pid DESC ";
  $result = $conn->query($sql);

}

//$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Title</title>
        <!--font-awesome cdn-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        <!--custom css-->
        <link rel="stylesheet" href="style.css" />
    </head>
    <style>
    .cards {
   display: flex;
   justify-content: space-between;
}
    </style>

    <body class="home-body">

        <!--navbar-->
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

        <!-- ad-boards -->

        <div class="row mt-3 mx-2 me-3">
            <div class="col-md-8">
                <a href="sales-home-page.php">
                    <div class="card">
                        <img src="../assets/ads board 1.png" alt="" />
                    </div>
                </a>
            </div>
            <div class="col-md-4 px-0 py-0 mx-0 my-0">
                <a href="sales-home-page.php">
                    <div class="card mb-1">
                        <img src="../assets/ads board 2.png" alt="" />
                    </div>
                </a>
                <a href="../../Services/src/services-home-page.php">
                    <div class="card">
                        <img src="../assets/ads board 3.png" alt="" />
                    </div>
                </a>
            </div>
        </div>

        <!-- category-button -->

        <div class="col justify-content-center mx-3 my-3">
            <div class="col-md-12 d-flex justify-content-around category-container pt-2">
                <a type="button" class="btn btn-link" href="sales-home-page.php?Groceries">
                    <img src="../assets/category_img1.png" alt="" />
                    <p class="category-text">Groceries</p>
                </a>
                <a type="button" class="btn btn-link" href="../../Services/src/services-home-page.php">
                    <img src="../assets/category_img2.png" alt="" />
                    <p class="category-text">Services</p>
                </a>
                <a type="button" class="btn btn-link" href="sales-home-page.php?Vegetables">
                    <img src="../assets/category_img3.png" alt="" />
                    <p class="category-text">Vegetables</p>
                </a>
                <a type="button" class="btn btn-link" href="sales-home-page.php?Fruits">
                    <img src="../assets/category_img4.png" alt="" />
                    <p class="category-text">Fruits</p>
                </a>
                <a type="button" class="btn btn-link" href="../../Services/src/services-home-page.php">
                    <img src="../assets/category_img5.png" alt="" />
                    <p class="category-text">Machinery</p>
                </a>
                <a type="button" class="btn btn-link" href="../../Services/src/services-home-page.php">
                    <img src="../assets/category_img6.png" alt="" />
                    <p class="category-text">Rental</p>
                </a>
            </div>
        </div>

        <!-- product-card -->


        <div class="col mx-3">

            <div class="row">
              <?php
                             // LOOP TILL END OF DATA
                             while($rows=$result->fetch_assoc())
                             {
                         ?>
                <div class="col-md-3" >
                    <a href="sales-product-page.php?update=<?php echo $rows['pid'];?>">
                    <div class="card" >

                        <img src="../assets/product_img1.png" alt="" />

                        <div class="card-body">
                            <h6 class="card-title"><?php echo $rows['productname'];?></h6>
                            <div class="row justify-content-between">
                                <div class="col d-flex justify-content-start">
                                    <span class="badge badge-home">Local seller</span>
                                </div>
                                <div class="col d-flex justify-content-start">
                                    <span class="badge badge-home"><?php echo $rows['availability'];?></span>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <span class="price"><?php echo $rows['price'];?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    </a>
                    <br>
                </div>

                <?php
                               }
                           ?>
            </div>
        </div>






        <!-- see-more-button -->

        <!-- <div class="row justify-content-center">
            <button class="btn  see-more-button my-3" type="button">
                See more
            </button>
        </div> -->

        <!-- footer -->
        <footer>
            <div class="container-fluid px-3">
                <div class="row">
                    <div class="col-md-4 contact-text pt-3">
                        <h5 class="fw-bolder">Contact us</h5>
                        <h6 class="fw-bold">Pusat Pertanian Universiti</h6>
                        <p>
                            Universiti Putra Malaysia
                            <br />43400 UPM Serdang<br />
                            Selangor Darul Ehsan
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i> +603 9769 7282/7301
                        </p>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> +603 8942 4076</p>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i> dir.tpu@upm.edu.my
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="row align-items-center">
                            <div class="col align-items-center">
                                <img class="w-75" src="../assets/csit_logo.png" alt="" />
                            </div>
                            <div class="col">
                                <img class="w-75" src="../assets/upm_logo_horizontal.png" alt="" />
                            </div>
                            <div class="col">
                                <img class="w-75" src="../assets/SNAPS_PAC.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>
