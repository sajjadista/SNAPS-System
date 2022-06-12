<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SNAPS Service Feedback</title>
        <!--font-awesome cdn-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        body {
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            color: green;
            font-weight: bold;
            margin: 50px;
        }

        div.feedback1 {
            background-color: green;
            height: 250px;
            width: 350px;
            padding-top: 20px;
            padding-right: 130px;
            padding-bottom: 50px;
            padding-left: 80px;
            margin: 150px 350px 250px 550px;
            /* text-align:center; */
        }

        div.container {
            /* text-indent: 50px; */
            /* height: 750px;
        width: 950px;
        padding-top: 20px;
        padding-right: 130px;
        padding-bottom: 50px;
        padding-left: 80px; */
            /* margin: 150px 350px 250px 550px; */
        }

        p {
            text-align: center;
            /* color: green; */
            /* text-indent: 50px; */
        }

        a {
            /* text-align: justify; */
            color: green;
            text-indent: 550px;
        }

        input[type=submit] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 800px;
            cursor: pointer;
        }

        input[type=text] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 5px 15px;
            text-decoration: none;
            margin: 4px 0px;
            cursor: pointer;
        }

        input[type=datetime-local] {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 5px 15px;
            text-decoration: none;
            margin: 4px 0px;
            cursor: pointer;
        }

        /* navbar & footer */
        :root {
            padding: 0;
            margin: 0;
            --font: "Montserrat", sans-serif;
            --dark-green: #206023;
            --light-green: #368149;
            --brown: #381c07;
        }


        .contact-text {
            color: white;
        }

        .navbar {
            background-color: white;
        }

        .navbar-brand {
            margin-left: 22rem;
        }

        .nav-icon,
        .nav-text {
            color: var(--dark-green);
        }

        .profile-icon {
            font-size: 100px;
            color: var(--dark-green);
        }

        .fa-shopping-cart {
            font-size: 30px;
            color: var(--dark-green);
        }

        .dropdown-menu {
            min-width: 70px;
        }

        #dropdownMenuButton1 {
            background-color: var(--dark-green);
        }

        .nav-icon,
        .nav-text {
            color: var(--dark-green);
        }

        footer {
            background-color: var(--light-green);
        }
        </style>
    </head>

    <!--navbar-->
    <nav class="navbar navbar-light navbar-expand-md just">
        <div class="container-fluid">
            <div class="col-md-2 d-flex justify-content-center">
                <img src="../../Sales/assets/upm_logo_vertical.png" height="100" />
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand justify-content-center" href="#">
                            <img src="../../Sales/assets/SNAPS_PAC.png" height="70" />
                        </a>
                    </div>
                    <div class="col">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#"><svg class="nav-icon"
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
                                        <span class="nav-text">Follow us</span> </a><a class="nav-link" href="#"></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-shopping-bag nav-icon"></i> <span class="nav-text">My
                                            Purchase</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-hands-helping nav-icon"></i> <span class="nav-text">
                                            Services</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-user-circle nav-icon"></i> <span class="nav-text">
                                            User</span>
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

    <div class="feedback">
        <h2> Fill in the form so we can allocate a slot for your booking </h2>
        <div class="container">
            <p>
            <form action="services-upload-booking.php">
                <label for="bookingtime">1. Date and time of booking?</label>
                <input style="margin-left:500px" type="datetime-local" id="bookingtime" name="bookingtime">
                <br></br>
                <label for="machinery">2. What machinery do you need?</label>
                <br></br>
                  <input style="margin-left:700px" type="radio" id="tractor" name="machinery" value="TRACTOR">
                  <label for="tractor">Tractor</label><br>
                  <input style="margin-left:700px" type="radio" id="lorry" name="machinery" value="LORRY">
                  <label for="lorry">Lorry</label><br>
                  <input style="margin-left:700px" type="radio" id="fertilizer truck" name="machinery"
                    value="FERTILIZER TRUCK">
                  <label for="fertilizer truck">Ferlitizer Truck</label>
                <br></br>
                <label for="quantity">3. Quantity of the machinery needed?</label>
                <input style="margin-left:435px" type="text" id="quantity" name="quantity"><br><br>
                <label for="machinery">4. Do you need a driver?</label>
                <br></br>
                  <input style="margin-left:700px" type="radio" id="yes" name="driver" value="YES">
                  <label for="html">Yes</label><br>
                  <input style="margin-left:700px" type="radio" id="no" name="driver" value="NO">
                  <label for="css">No</label><br>
                <br>
                <label for="purpose">5. Intended purpose for machine?</label>
                <input style="margin-left:462px" type="text" id="purpose" name="purpose"><br>
                <br>
                <label for="coveragesize">6. Preferred coverage size?</label>
                <br></br>
                <input style="margin-left:700px" type="radio" id="50,000" name="coveragesize" value="50,000">
                  <label for="50,000">RM 50,000</label><br>
                  <input style="margin-left:700px" type="radio" id="100,000" name="coveragesize" value="100,000">
                <label for="100,000">RM 100,000</label><br>
                  <input style="margin-left:700px" type="radio" id="200,000" name="coveragesize" value="200,000">
                  <label for="200,000">RM 200,000</label><br>
                <input style="margin-left:700px" type="radio" id="500,000" name="coveragesize" value="500,000">
                  <label for="500,000">RM 500,000</label><br>
                <input style="margin-left:700px" type="radio" id="1,000,000" name="coveragesize" value="1,000,000">
                <label for="1,000,000">RM 1,000,000</label><br>
                <input style="margin-left:700px" type="radio" name="coveragesize" value=""> Other (RM) <input
                    style="margin-left:705px" type="text" name="coveragesize" />
                <br></br>
                <label for="commitment">7. What is your estimated monthly commitment? (RM)</label>
                <input style="margin-left:319px" type="text" id="commitment" name="commitment"><br>
                <br>
                <label for="commitment">8. What amount are you willing to pay monthly in total for your insurance?
                    (RM)</label>
                <input style="margin-left:140px" type="text" id="commitment" name="commitment"><br>
                <br>
                <input type="submit" value="Download">
            </form>
            </p>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container-fluid px-3">
            <div class="row">
                <div class="col-md-4 contact-text pt-3">
                    <h5 class="fw-bolder">Contact us</h5>
                    <h6 class="fw-bold">Pusat Pertanian Universiti</h6>
                    <p class="d-flex justify-content-start py-0 my-0">
                        Universiti Putra Malaysia
                    </p>
                    <p class="d-flex justify-content-start py-0 my-0">43400 UPM Serdang </p>

                    <p class="d-flex justify-content-start">
                        Selangor Darul Ehsan
                    </p>
                    <p class="d-flex justify-content-start align-items-center">
                        <i class=" fa fa-phone" aria-hidden="true"></i> +603 9769 7282/7301
                    </p>
                    <p class="d-flex justify-content-start align-items-center"><i class="fa fa-fax"
                            aria-hidden="true"></i> +603 8942 4076
                    </p>
                    <p class="d-flex justify-content-start align-items-center">
                        <i class="fa fa-envelope" aria-hidden="true"></i> dir.tpu@upm.edu.my
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <img class="w-75" src="../../Sales/assets/csit_logo.png" alt="" />
                        </div>
                        <div class="col">
                            <img class="w-75" src="../../Sales/assets/upm_logo_horizontal.png" alt="" />
                        </div>
                        <div class="col">
                            <img class="w-75" src="../../Sales/assets//SNAPS_PAC.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </ body>