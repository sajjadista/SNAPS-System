<?php
require_once '../../../Backend/pdo.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "tpu");
if(!isset($_SESSION["email"])){
  header("Location: login.php");
}

if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST["confirm_password"]));
    $phone_number = mysqli_real_escape_string($conn, $_POST["phone_number"]);
    $unit_number = mysqli_real_escape_string($conn, $_POST["unit_number"]);
    $street = mysqli_real_escape_string($conn, $_POST["streer"]);
    $city = mysqli_real_escape_string($conn,$_POST["city"]);
    $state = mysqli_real_escape_string($conn,$_POST["state"]);
    $postal_code = mysqli_real_escape_string($conn,$_POST["postal_code"]);
    $inlineRadioOptions = mysqli_real_escape_string($conn,$_POST['inlineRadioOptions']);

    if ($password === $confirm_password) {
            $sql = "UPDATE user SET username='$email', password='$password', phone='$phone_number', unit='$unit_number', street='$street', city='$city', state='$state', postal='$postal_code', gender='$inlineRadioOptions' WHERE username='{$_SESSION["email"]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
            }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
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
                <i
                  class="fas fa-user-circle profile-icon mt-3">
                </i>
                <br>
                <form class="text-center w-75" method="post">

                  <?php

                  $sql = "SELECT * FROM user WHERE username='{$_SESSION["email"]}'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                  ?>

                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="email"
                      name="email"
                      placeholder="Username"
                      value = "<?php echo $row['username']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="password"
                      placeholder="Password"
                      value = "<?php echo $row['password']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="confirm-password"
                      placeholder="Confirm Password"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="number"
                      name="phone-number"
                      placeholder="Phone Number"
                      value = "<?php echo $row['phone']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="number"
                      name="unit-number"
                      placeholder="Unit Number"
                      value = "<?php echo $row['unit']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="street"
                      placeholder="Street"
                      value = "<?php echo $row['street']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="city"
                      placeholder="City"
                      value = "<?php echo $row['city']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="state"
                      placeholder="State"
                      value = "<?php echo $row['state']; ?>"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="number"
                      name="postal-code"
                      placeholder="Postal Code"
                      value = "<?php echo $row['postal']; ?>"
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
                      <?php if($row['gender'] == "Male") { echo "checked"; }?>
                      id="inlineRadio1"
                      value="option1"
                    />
                    <label class="form-check-label" for="inlineRadio1"
                      >Male</label
                    >
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      <?php if($row['gender'] == "Female") { echo "checked"; }?>
                      id="inlineRadio2"
                      value="option2"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                      >Female</label
                    >
                  </div>

                  <?php
                    }
                  }
                  ?>

                  <div class="mb-3">
                    <button class="btn main-button d-block w-100" type="submit">
                      Edit
                    </button>
                  </div>
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
  </body>
</html>
