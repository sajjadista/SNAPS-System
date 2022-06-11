<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SNAPS Admin Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="container panel center-screen admin-login py-5 px-3">

        <div class="row mb-5">
            <div class="col d-flex justify-content-center">
                <img id="snaps-logo" class="img-fluid" src="../assets/snaps-logo.png" alt="SNAPS Logo">
            </div>
        </div>

        <div class="row my-3">
            <div class="col d-flex justify-content-center">
                <h1>Admin Login</h1>
            </div>
        </div>

        <form action="">
            <div class="row my-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="username" id="username" placeholder="Admin Username">
                </div>
            </div>

            <div class="row my-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="text" name="admin-id" id="admin-id" placeholder="Admin ID">
                </div>
            </div>

            <div class="row my-3">
                <div class="col d-flex justify-content-center">
                    <input class="textfield-theme" type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>

            <div class="row my-3 ">
                <div class="col d-flex justify-content-center">
                    <input class=" button-theme" type="submit" value="Login">
                </div>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>