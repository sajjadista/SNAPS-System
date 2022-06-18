<?php
require_once '../../../Backend/pdo.php';
session_start();

if ( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone_number']) && isset($_POST['unit_number']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['state'])
  && isset($_POST['postal_code']) && isset($_POST['inlineRadioOptions'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $phone_number = $_POST['phone_number'];
    $unit_number = $_POST['unit_number'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postal_code = $_POST['postal_code'];
    $inlineRadioOptions = $_POST['inlineRadioOptions'];

    $stmt = $pdo->prepare("INSERT INTO user (username,password,phone,unit,street,city,state,postal,gender)VALUES('$email','$hash','$phone_number','$unit_number','$street','$city','$state','$postal_code','$inlineRadioOptions')");
    $stmt->execute();

  header("Location: sales-login-page.php");
  return;
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
                <p class="main-text">Sign Up</p>
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
                    <input
                      class="form-control"
                      type="password"
                      name="confirm_password"
                      placeholder="Confirm Password"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="phone_number"
                      placeholder="Phone Number"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="unit_number"
                      placeholder="Unit Number"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="street"
                      placeholder="Street"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="city"
                      placeholder="City"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="state"
                      placeholder="State"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="postal_code"
                      placeholder="Postal Code"
                      required
                    />
                  </div>
                  <div>
                 <p class="text-start">Gender</p>
                  </div>
                  <div class="form-check form-check-inline mb-3">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio1"
                      value="Male"
                    />
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio2"
                      value="Female"
                    />
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <div class="mb-3">
                    <button class="btn main-button d-block w-100" type="submit">
                      Sign up
                    </button>
                  </div>


                  <p class="text-center">
                    Have an account already?<a class="link-text" href="sales-login-page.php"> Sign in</a>
                  </p>
                </form>
              </div>
              <div class="mb-3"></div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
