<?php
require_once '../../../Backend/pdo.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "tpu");
if ( isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);
    $query = "SELECT * FROM user WHERE username='$email'and password='$hash'";
    $result = mysqli_query($conn,$query) ;
    $rows = mysqli_num_rows($result);
    $getval = $result->fetch_assoc();
        if($rows==1){
        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $getval['uid'];

        header("Location: sales-home-page.php");
         }else{
        echo'<script>alert("Your Username and Password is Invalid")</script>';
    }
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
    <!--custom css-->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section class="position-relative py-4 py-xl-5">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-xl-6">
            <div class="card mb-5">
              <div class="card-body d-flex flex-column align-items-center">
                <img class="mb-3" src="../assets/SNAPS_PAC.png" height="200" />
                <p class="main-text">Login</p>
                <form class="text-center w-75" method="post">
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="email"
                      name="email"
                      placeholder="Username"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="password"
                      placeholder="Password"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <button class="btn main-button d-block w-100" type="submit">
                      Login
                    </button>
                  </div>
                  <p>OR</p>
                  <button
                    class="btn btn-primary d-block w-100 mb-5"
                    type="submit"
                  >
                    <svg
                      class="me-2"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="-12 0 512 512"
                      width="1em"
                      height="1em"
                      fill="currentColor"
                    >
                      <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                      <path
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                      ></path></svg
                    >Continue with Google
                  </button>
                  <p class="text-center">Forgot password?<a class="link-text" href=""> Click here</a></p>
                </form>
              </div>
              <div class="mb-3"></div>
            </div>
            <div class="card mb-5">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="text-center py-5">
                  Don’t have an account?<a class="link-text" href="sales-signup-page.php">
                    Sign up</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
