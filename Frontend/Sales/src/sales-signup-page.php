<?php
require_once '../../../Backend/pdo.php';
session_start();

if ( isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone_number']) && isset($_POST['unit_number']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['state'])
  && isset($_POST['postal_code']) && isset($_POST['inlineRadioOptions'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);
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
                <form name="register" class="text-center w-75" method="post" onsubmit="return CheckPassword()">
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
                      id="password"
                      class="form-control"
                      type="password"
                      name="password"
                      placeholder="Password"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      id="confirm_password"
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
                      type="number"
                      name="phone_number"
                      placeholder="Phone Number"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="number"
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
                    <label for="cars">Select your city :  </label>
                    <select name ='city' id='city'>
                      <option value="Batu Pahat">Batu Pahat</option>
                      <option value="Johor Bahru">Johor Bahru</option>
                      <option value="Kota Tinggi">Kota Tinggi</option>
                      <option value="Kulaijaya ">Kulaijaya </option>
                      <option value="Mersing">Mersing</option>
                      <option value="Muar">Muar</option>
                      <option value="Pontian">Pontian</option>
                      <option value="Segamat ">Segamat </option>
                      <option value="Tangkak ">Tangkak </option>
                      <option value="Baling">Baling</option>
                      <option value="Gua Musang">Gua Musang</option>
                      <option value="Jeli">Jeli</option>
                      <option value="Kecil Lojing  ">Kecil Lojing  </option>
                      <option value="Kota Bharu">Kota Bharu</option>
                      <option value="Kuala Krai">Kuala Krai</option>
                      <option value="Machang">Machang</option>
                      <option value="Pasir Mas ">Pasir Mas </option>
                      <option value="Pasir Puteh ">Pasir Puteh </option>
                      <option value="Tanah Merah">Tanah Merah</option>
                      <option value="Tumpat">Tumpat</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Labuan">Labuan</option>
                      <option value="Alor Gajah">Alor Gajah</option>
                      <option value="Jasin">Jasin</option>
                      <option value="Melaka Tengah">Melaka Tengah</option>
                      <option value="Jelebu">Jelebu</option>
                      <option value="Jempol">Jempol</option>
                      <option value="Kuala Pilah">Kuala Pilah</option>
                      <option value="Port Dickson">Port Dickson</option>
                      <option value="Rembau">Rembau</option>
                      <option value="Seremban">Seremban</option>
                      <option value="Tampin">Tampin</option>
                      <option value="Bentong">Bentong</option>
                      <option value="Bera">Bera</option>
                      <option value="Cameron Highlands">Cameron Highlands</option>
                      <option value="Jerantut">Jerantut</option>
                      <option value="Kuantan">Kuantan</option>
                      <option value="Lipis">Lipis</option>
                      <option value="Maran">Maran</option>
                      <option value="Pekan">Pekan</option>
                      <option value="Raub">Raub</option>
                      <option value="Rompin">Rompin</option>
                      <option value="Temerloh">Temerloh</option>
                      <option value="Bagan Datuk ">Bagan Datuk </option>
                      <option value="Batang Padang">Batang Padang</option>
                      <option value="Hilir Perak">Hilir Perak</option>
                      <option value="Hulu Perak">Hulu Perak</option>
                      <option value="Kampar ">Kampar </option>
                      <option value="Kerian">Kerian</option>
                      <option value="Kinta">Kinta</option>
                      <option value="Kuala Kangsar">Kuala Kangsar</option>
                      <option value="Larut dan Matang">Larut dan Matang</option>
                      <option value="Manjung">Manjung</option>
                      <option value="Muallim ">Muallim </option>
                      <option value="Perak Tengah">Perak Tengah</option>
                      <option value="Perlis">Perlis </option>
                      <option value="Gombak">Gombak</option>
                      <option value="Klang">Klang</option>
                      <option value="Kuala Langat">Kuala Langat</option>
                      <option value="Kuala Selangor">Kuala Selangor</option>
                      <option value="Petaling">Petaling</option>
                      <option value="Sabak Bernam">Sabak Bernam</option>
                      <option value="Sepang">Sepang</option>
                      <option value="Ulu Langat">Ulu Langat</option>
                      <option value="Ulu Selangor">Ulu Selangor</option>
                      <option value="Besut">Besut</option>
                      <option value="Kemaman">Kemaman</option>
                      <option value="Kuala Terengganu">Kuala Terengganu</option>
                    </select>

                  
                  </div>
                  <div class="mb-3">
                    <label for="cars">Select your State :  </label>
                    <select name ='state' id='state'>
                      <option value="Kuala Terengganu ">Kuala Terengganu </option>
                      <option value="Terengganu">Terengganu</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Sabah ">Sabah </option>
                      <option value="Putrajaya ">Putrajaya </option>
                      <option value="Pulau Pinang">Pulau Pinang</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Perak">Perak</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Labuan">Labuan</option>
                      <option value="Kuala Lumpur ">Kuala Lumpur </option>
                      <option value="Kelantan ">Kelantan </option>
                      <option value="Kedah">Kedah</option>
                      <option value="Johor">Johor</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="number"
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

    <script>
    function CheckPassword()
    {
      var passw = document.getElementById('password').value;
      var passw2 = document.getElementById('confirm_password').value;
      var upper  =/[A-Z]/;
      var number = /[0-9]/;

      if(passw.length < 8 || passw.length > 20 || passw != passw2 || !number.test(passw) || !upper.test(passw)) {
        if(passw.length<8){
          alert("Please make sure password is longer than 8 characters.")
          return false;
        }
        if(passw.length>20){
          alert("Please make sure password is shorter than 20 characters.")
          return false;
        }
        if(passw != passw2){
          alert("Please make sure passwords match.")
          return false;
        }
        if(!number.test(passw)){
          alert("Please make sure password includes a digit")
          return false;
        }
        if(!upper.test(passw)) {
          alert("Please make sure password includes an uppercase letter.")
          return false;
        }
      }
    }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
