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
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="email"
                      name="email"
                      placeholder="Username"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="password"
                      name="confirm-password"
                      placeholder="Confirm Password"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="phone-number"
                      placeholder="Phone Number"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="unit-number"
                      placeholder="Unit Number"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="street"
                      placeholder="Street"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="city"
                      placeholder="City"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="state"
                      placeholder="State"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      class="form-control"
                      type="text"
                      name="postal-code"
                      placeholder="Postal Code"
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
                      id="inlineRadio2"
                      value="option2"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                      >Female</label
                    >
                  </div>
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
