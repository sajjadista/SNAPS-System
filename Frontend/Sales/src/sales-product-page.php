<?php
require_once '../../../Backend/pdo.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "tpu");

$apid;

if(isset($_GET['update'])){
$pid =$_GET['update'];
$apid = $pid;
$sql = "SELECT * FROM product WHERE pid='$pid'";
$result = $conn->query($sql);


  if (  isset($_POST['quantity'])) {


      $uid = $_SESSION["uid"];
      $quantity = $_POST['quantity'];
      $stmt = $conn->prepare("INSERT INTO cart (uid,pid,quantity)VALUES('$uid','$pid','$quantity')");
      $stmt->execute();
      header("Location: sales-cart-page.php");
      return;
      }
//$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title</title>
    <!--font-awesome cdn-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--bootstrap cdn-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- jquery number input -->
    <script
      data-require="jquery@3.1.1"
      data-semver="3.1.1"
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <!--custom css-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!--navbar-->
    <nav class="navbar navbar-light navbar-expand-md just">
      <div class="container-fluid">
        <div class="col-md-2 d-flex justify-content-center">
          <img src="../assets/upm_logo_vertical.png" height="100" />
        </div>
        <div class="col">
          <div class="row">
            <div class="col">
              <a class="navbar-brand justify-content-center" href="#">
                <img src="../assets/SNAPS_PAC.png" height="70" />
              </a>
            </div>
            <div class="col">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarNavDropdown"
              >
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#"
                      ><svg
                        class="nav-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="-32 0 512 512"
                        width="1em"
                        height="1em"
                        fill="currentColor"
                      >
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                          d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"
                        ></path></svg
                      ><svg
                        class="nav-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="-32 0 512 512"
                        width="1em"
                        height="1em"
                        fill="currentColor"
                      >
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                          d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                        ></path>
                      </svg>
                      <span class="nav-text">Follow us</span> </a
                    ><a class="nav-link" href="#"></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <i class="fas fa-shopping-bag nav-icon"></i> <span
                        class="nav-text"
                        >My Purchase</span
                      >
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <i class="fas fa-hands-helping nav-icon"></i> <span
                        class="nav-text"
                      >
                        Services</span
                      >
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <i class="fas fa-user-circle nav-icon"></i> <span
                        class="nav-text"
                      >
                        User</span
                      >
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-10">
              <form class="form-inline md-form form-lg mt-0 pt-1">
                <input
                  class="form-control form-control-md ml-3 w-100"
                  type="text"
                  placeholder="🔎 Search for groceries, services, anything"
                  aria-label="Search"
                />
              </form>
              <p class="tagline text-center pt-1">
                Bringing freshness closer to you!
              </p>
            </div>
            <div class="col-md-2 d-flex justify-content-center">
              <div class="row">
                <div class="col">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col">
                  <div class="dropdown">
                    <button
                      class="btn btn-secondary dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      EN
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
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


    <!-- product -->
    <?php

    // LOOP TILL END OF DATA
    while($rows=$result->fetch_assoc())
    {
    ?>
    <form method="post">
    <div class="col product-info px-3">
      <div class="col description-box mx-3 py-3 my-3">
        <div class="row category-nav pt-3 mb-3">
          <p>
            Pusat Pertanian Putra > Food > Package Foods > <?php echo $rows['productname'];?>
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 pe-3 product-image">
            <div class="row">
              <div class="card">
                <img height="300px" src="../assets/product_img1.png" alt="" />
              </div>
            </div>
            <div class="row pt-3">
              <div class="col">
                <span>Share: </span>
                <i class="fa-brands fa-whatsapp"></i>
                <i class="fa-brands fa-facebook"></i>
              </div>
              <div class="col">
                <i class="fa-solid fa-heart" ></i>
                <span>Favorite</span>
              </div>
            </div>
          </div>
          <div class="col-md-8 ps-3">
            <div class="col">
              <span class="badge">Local seller</span>
              <span><?php echo $rows['productname'];?></span>
            </div>
            <div class="col pt-3">
              <span class="rating">5.0</span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>| 3 ratings |<?php echo $rows['sold'];?> sold</span>
            </div>
            <div class="col pt-3">
              <h1>RM <?php echo $rows['price'];?></h1>
            </div>
            <div class="row">
              <div class="col">
                <span>Shop vouchers</span>
              </div>
              <div class="col">
                <span class="badge">RM 2 OFF</span>
                <span class="badge">RM 5 OFF</span>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col">
                <span>Add on</span>
              </div>
              <div class="col">
                <span class="badge">Free gift</span>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col">
                <span>Shipping</span>
              </div>
              <div class="col">
                <span class="badge">Free shipping</span>
                <p>Free shipping for orders inside UPM</p>

                <div class="row pt-3">
                  <div class="col-md-1">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                  </div>
                  <div class="col">Shipping To</div>
                  <div class="col">UPM Serdang</div>
                </div>
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col">Shipping Fee</div>
                  <div class="col">RM 0.00</div>
                </div>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col">
                <span>Variation</span>
              </div>
              <div class="col">
                <span class="badge">Original</span>
                <span class="badge">Spicy</span>
                <span class="badge">Extra Spicy</span>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col">
                <span>Quantity</span>
              </div>
              <div class="col">
                <div class="quantity buttons_added">
              	<input type="button" value="-" class="minus">
                <input type="number"
                        step="1"
                        min="1"
                        max="<?php echo $rows['quantity'];?>"
                        name="quantity"
                        value="1"
                        title="Qty"
                        class="input-text qty text"
                        size="4"
                        pattern=""
                        inputmode="">
                <input type="button" value="+" class="plus">
                <span><?php echo $rows['quantity'];?> pieces available</span>
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-outline-success cart-button my-3 px-3 fw-bold w-25">
              Add to cart
            </button>
          </div>
        </div>

        <!-- description -->
        <div class="row category-nav py-3 my-3 ">
          <div class="container-fluid">
            <h5 class="fw-bold">Description</h5>
            <p>
            <?php echo $rows['description'];?>
            </p>
          </div>
        </div>
</form>
        <?php
          }

        ?>


        <!-- recommendation -->
        <div class="row my-3">
          <h5>Recommended for you</h5>
        </div>

        <div class="col">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img src="../assets/product_img1.png" alt="" />
                <div class="card-body">
                  <h6 class="card-title">Hot sauce anchovies</h6>

                  <div class="row justify-content-between">
                    <div class="col d-flex justify-content-start">
                      <span class="badge">Local seller</span>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <span class="price">RM 12.20</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="../assets/product_img1.png" alt="" />
                <div class="card-body">
                  <h6 class="card-title">Hot sauce anchovies</h6>

                  <div class="row justify-content-between">
                    <div class="col d-flex justify-content-start">
                      <span class="badge">Local seller</span>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <span class="price">RM 12.20</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="../assets/product_img1.png" alt="" />
                <div class="card-body">
                  <h6 class="card-title">Hot sauce anchovies</h6>

                  <div class="row justify-content-between">
                    <div class="col d-flex justify-content-start">
                      <span class="badge">Local seller</span>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <span class="price">RM 12.20</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="../assets/product_img1.png" alt="" />
                <div class="card-body">
                  <h6 class="card-title">Hot sauce anchovies</h6>

                  <div class="row justify-content-between">
                    <div class="col d-flex justify-content-start">
                      <span class="badge">Local seller</span>
                    </div>
                    <div class="col d-flex justify-content-end">
                      <span class="price">RM 12.20</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
              <i class="fa fa-envelope" aria-hidden="true"></i>
              dir.tpu@upm.edu.my
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-center">
            <div class="row align-items-center">
              <div class="col align-items-center">
                <img class="w-75" src="../assets/csit_logo.png" alt="" />
              </div>
              <div class="col">
                <img
                  class="w-75"
                  src="../assets/upm_logo_horizontal.png"
                  alt=""
                />
              </div>
              <div class="col">
                <img class="w-75" src="../assets/SNAPS_PAC.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
